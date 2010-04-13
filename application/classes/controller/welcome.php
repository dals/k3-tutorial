<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Project_Controller_Base {

 	public function action_index()
  	{
            $this->msg = 'Help!';

            $users = Jelly::select('Users')
            ->where(':primary_key', '=', 2)
             ->limit(1)
             ->execute();

            echo $users->role;
  	}

  	public function action_contact()
  	{
            $this->template->title = __('Contact Information for Acme Widgets');
            $this->template->content = View::factory('page/contact' );
  	}


} // End Welcome
