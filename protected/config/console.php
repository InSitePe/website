<?php

// This is the configuration for yiic console application.
// Any writable CConsoleApplication properties can be configured here.
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'My Console Application',
    // preloading 'log' component
    'preload' => array('log'),
    // application components
    'components' => array(
        'db' => array(
            'connectionString' => 'mysql:host=localhost;dbname=db_insite',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '4cc350',
            'charset' => 'utf8',
        ),
        'aulaapp' => array(
            'connectionString' => 'mysql:host=localhost;dbname=db_aulaapp',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '4cc350',
            'charset' => 'utf8',
            'class' => 'CDbConnection',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'error, warning',
                ),
            ),
        ),
    ),
);
