<?php
    session_start();
    if(!isset($session['login_user'])) {
        return redirect()->route('users.getLogin');
    }
?>
