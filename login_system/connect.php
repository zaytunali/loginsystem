<?php

$user = 'admin';
$pass = 'secret123';
$db = 'testdb';

$db = new mysqli('localhost', $user, $pass, $db) or die("unable to detect");



?>