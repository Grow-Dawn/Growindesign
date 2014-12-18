<?php

session_start();

function loggedIn() {
    if ($_SESSION['loggedIn'] != TRUE) {
        header('location: /index.php?action=login');
    }
}

function checkAdmin() {
    if ($_SESSION['access'] != 'admin') {
        header('location: /index.php?action=home');
    }
}
