<?php
class Controller_Sign extends Project_Controller_Base {

    function action_index() {
    }

    public function action_in() {
        if(empty($_POST)) {
            $this->setSystemMessage('Please, enter username and password');
            parent::redirect('/');
        }

        $this->authlite->login($_POST['username'], $_POST['password'], TRUE);

        if ($this->authlite->logged_in()) {
            $this->request->redirect('');
        } elseif ( ! empty($_POST)) {
            $this->setSystemMessage('Wrong login or password');
            parent::redirect('/');
        }
    }

    public function action_out() {
        $this->auto_render = false;
        $this->authlite->logout(true);
        $this->request->redirect('');
    }
}