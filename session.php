<?php

session_start();

function isLoggedIn(){
    return $isset($_SESSION['user_id']);
}
function getUserInfo(){
    return $_SESSION['user'];
}

function requireLogin(){
    if (!$isLoggedIn) {
        header('Location: login.php');
    }
}

