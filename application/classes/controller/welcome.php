<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Base {

 	public function action_index()
  	{
            $this->msg = 'Help!';
  	}

  	public function action_contact()
  	{
            $this->template->title = __('Contact Information for Acme Widgets');
            $this->template->content = View::factory('page/contact' );
  	}


} // End Welcome
