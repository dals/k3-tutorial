<?php
class Controller_Error extends Controller {

    public function action_404()
    {
        $this->request->headers['HTTP/1.1'] = '404';
        $this->request->headers['Accept-Charset'] = 'utf-8';
        $this->request->response = View::factory('error/404');
    }

    public function action_403()
    {
        $this->request->headers['HTTP/1.1'] = '403';
        $this->request->headers['Accept-Charset'] = 'utf-8';
        $this->request->response = View::factory('error/403');
    }

    public function action_500()
    {
        $this->request->headers['HTTP/1.1'] = '500';
        $this->request->headers['Accept-Charset'] = 'utf-8';
        $this->request->response = View::factory('error/500');
    }

}