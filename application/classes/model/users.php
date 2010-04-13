<?php defined('SYSPATH') OR die('No direct access allowed.');

class Model_Users extends Jelly_Model {
	
    public static function initialize(Jelly_Meta $meta)
    {
        $meta->table('Users')
             ->fields(array(
                 'id' => new Field_Primary,
                 'username' => new Field_String,
                 'password' => new Field_String,
                 'is_active' => new Field_Boolean,
                 'role' => new Field_String
             ));
    }

	
} // End User Model