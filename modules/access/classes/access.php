<?php defined('SYSPATH') or die('No direct script access.');
class Access {
    protected static $instance;
    protected $config;
    protected $session;
    
    public static function instance() {
        if ( ! isset(Access::$instance)) {
            // Load the configuration for this type
            $config = Kohana::config('access');
            
            Access::$instance = new Access($config);
        }

        return Access::$instance;
    }
    
    public function __construct($config = array())
    {
        // Save the config in the object
        $this->config = $config;

        $this->session = Session::instance();
    }
    
    public function isLoggedIn() {
        return $this->session->get($this->config['session_ns']);
    }
}
