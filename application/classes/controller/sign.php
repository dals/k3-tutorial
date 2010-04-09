<?php
class Controller_Sign extends Project_Controller_Base {

    function action_index() {
        
    }

    public function action_in() {
        $this->auto_render = false;
        empty($_POST) or $this->authlite->login($_POST['username'], $_POST['password'], TRUE);

        if ($this->authlite->logged_in()) {
            $this->request->redirect('');
        } elseif ( ! empty($_POST)) {
            echo 'Wrong';
        }
    }

    public function action_out() {
        $this->authlite->logout();
        $this->request->redirect('');
    }
}