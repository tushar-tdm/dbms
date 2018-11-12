<?php

$dbsn = "localhost";
$dbun = "root"; 
$dbpwd = "";	
$dbname = "dbms";

$conn = mysqli_connect($dbsn,$dbun,$dbpwd,$dbname);
if($conn == 'false'){
	echo "cannot connect to the database";
}
