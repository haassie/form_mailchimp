<?php
$EM_CONF[$_EXTKEY] = array(
    'title' => 'Mailchimp integration for EXT:form',
    'description' => '',
    'category' => 'frontend',
    'author' => 'Richard Haeser',
    'author_email' => 'richardhaeser@gmail.com',
    'clearCacheOnLoad' => 0,
    'dependencies' => '',
    'state' => 'stable',
    'uploadfolder' => 0,
    'version' => '0.0.1',
    'constraints' => array(
        'depends' => array(),
        'conflicts' => array(),
        'suggests' => array(),
    ),
    'autoload' => array(
        'psr-4' => array('Haassie\\FormMailchimp\\' => 'Classes')
    ),
    'conflicts' => '',
    'suggests' => array(),
);
