<?php
session_start();

$_SESSION['user_id'] = 1;

$db = new PDO('mysql:dbname=todo;host=localhost', 'ifah', 'password');

if(!isset($_SESSION['user_id'])){
	die('You are not logged in.');
}
?>