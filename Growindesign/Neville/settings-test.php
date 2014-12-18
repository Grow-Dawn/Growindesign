<?php
/*
* BYUI - CIT 336
* Mike Neville
*/
global $db;
$dsn = 'mysql:host=localhost;dbname=cit336example';
$db = new PDO($dsn, 'user', 'password');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
