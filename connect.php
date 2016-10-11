<?php 
	require_once 'config/config.php';
	session_start();
	header("Content-type: text/html; charset=utf-8"); 
	$link = mysql_connect(DB_localhost,DB_username,DB_password);
	mysql_query('set names utf8');
	mysql_select_db(DB_dbname);
 ?>