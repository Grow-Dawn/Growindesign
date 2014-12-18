<?php

// Dawn Grow

global $db;
$dsn = 'mysql:host=localhost;dbname=futeigei_artwork';
$db = new PDO($dsn, 'user', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
