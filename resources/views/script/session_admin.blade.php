<?php
    session_start();
    if(!isset($session['login_admin'])) {
        return view('admin.login');
    }
?>
