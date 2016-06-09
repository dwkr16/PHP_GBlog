<?php
/*
 * Author Dwkr16 for Stunet Geek Blog 
 * Defining Data Source Name
 * Username and Password
 * of your Database 
 */
$dsn='mysql:host=localhost;dbname=geek_blog';
$username='root';
$password='tiger';

 try
  {
	$conn=new PDO($dsn,$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo 'connected';
  }
 catch(PDOException $e)
     
  {
	echo $e->getMessage();
  }


?>
