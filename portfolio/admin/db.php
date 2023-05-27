<?php 

const DB_HOST = 'localhost';
const DB_USER = 'admin';
const DB_PASSWORD = 'Notnull';
const DB_NAME     = 'personal_portfolio';

$dbcon = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

if($dbcon->connect_error){
	die("Database connection failed".$dbcon->connect_error);
}

?>
