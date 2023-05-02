<?php

$dbhost="localhost";
$dbuser="root";
$dbpassword="";
$dbname="tech";

//creating connection
$conn=new mysqli($dbhost, $dbuser, $dbpassword, $dbname);
if(!$conn)
{
die('Connection lost'.$conn->connect_error);
}

?>