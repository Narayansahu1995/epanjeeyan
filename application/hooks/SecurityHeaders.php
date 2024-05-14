<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecurityHeaders {

    public function setHeaders() {
        // Content Security Policy
        header("Content-Security-Policy: default-src 'self'; script-src 'self'; object-src 'none';");
        // Strict-Transport-Security
        header('Strict-Transport-Security: max-age=31536000; includeSubDomains; preload');
        // Add other security headers as needed
    }
}
