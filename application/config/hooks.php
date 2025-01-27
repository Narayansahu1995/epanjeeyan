<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/userguide3/general/hooks.html
|
*/
$hook['post_controller_constructor'][] = array(
    'class'    => 'SecurityHeaders',
    'function' => 'setHeaders',
    'filename' => 'SecurityHeaders.php',
    'filepath' => 'hooks'
);

$hook['pre_controller'] = array(
     'class'    => '',
     'function' => 'set_cookie_params',
     'filename' => 'set_cookie_params.php',
     'filepath' => 'hooks'
);