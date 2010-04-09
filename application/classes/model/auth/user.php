<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Auth_User extends ORM {
	protected $_table_name = 'users';
        protected $ignored_columns = array('password_confirm'); 
	// This class can be replaced or extended
	
} // End User Model