<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecurityHeaders {

    function set_cookie_params() {
        session_start();
        $params = session_get_cookie_params();
        header('Set-Cookie: ' . session_name() . '=' . session_id() . '; path=' . $params["path"] . '; secure; HttpOnly; SameSite=None');
    }
}