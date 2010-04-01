<?php
return array(
        'cookie' => array(
                'name' => 'cookie_name',
                'encrypted' => TRUE,
                'lifetime' => 43200,
        ),
        'native' => array(
                'name' => 'session_name',
                'encrypted' => TRUE,
                'lifetime' => 43200,
        ),
        'database' => array(
                'group' => 'default',
                'table' => 'table_name',
        ),
);