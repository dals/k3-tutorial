<?php
class Project_Controller_Base extends Controller_Template {
    public $template = 'templates/default/main';

    public $data = array();
    public $view = null;

    public $authlite;
    public $user;

    /**
     * The before() method is called before your controller action.
     * In our template controller we override this method so that we can
     * set up default values. These variables are then available to our
     * controllers if they need to be modified.
     */
    public function before() {
        // Authlite instance
        $this->authlite = Authlite::instance();
        $conf = Kohana::config('authlite');
        $conf = $conf->resource;
        // login check
        if ( ! $this->authlite->logged_in() && Request::instance()->controller != $conf['controller']) {
            $this->request->redirect($conf['controller']);
        } else {
            // assigns the user object
            $this->user = $this->authlite->get_user();

            if ($this->authlite->logged_in() && Request::instance()->controller == $conf['controller']) {
                $this->request->redirect('');
            }
        }

        parent::before();

        if ($this->auto_render) {
            $config = Kohana::config('site')->load('site');
            $site = $config->site;
            // Initialize empty values
            $this->template->title   = $site['title'];
            $this->template->content = '';
            $this->template->styles = array();
            $this->template->scripts = array();
        }
    }

    function __set($key, $val) {
        $this->data[$key] = $val;
    }
    /**
     * The after() method is called after your controller action.
     * In our template controller we override this method so that we can
     * make any last minute modifications to the template before anything
     * is rendered.
     */
    public function after() {
        if ($this->auto_render) {
            $styles = array(
                    'static/css/grid.css' => 'screen',
                    'static/css/ui/base.css' => 'screen',
            );

            $scripts = array(
                    'static/js/jquery-1.4.2.min.js',
                    'static/js/jquery-ui-1.8.custom.min.js',
            );

            $this->template->styles = array_merge( $this->template->styles, $styles );
            $this->template->scripts = array_merge( $this->template->scripts, $scripts );
        }

        $request = Request::instance();

        $this->view = View::factory($request->controller.'/'.$request->action);
        if(!empty($this->data)) {
            foreach ($this->data as $key => $value) {
                $this->view->$key = $value;
            }
        }
        $this->template->content = $this->view;

        parent::after();
    }

}