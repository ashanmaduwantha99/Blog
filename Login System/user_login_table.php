<?php
require_once 'config.php';
$sql="CREATE TABLE user_login (
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    fname VARCHAR(50) NOT NULL ,
    lname VARCHAR(255) NOT NULL,
    email VARCHAR(50) NOT NULL ,
    address VARCHAR(50) NOT NULL ,
    job VARCHAR(50) NOT NULL ,
    tele_num VARCHAR(50) NOT NULL ,
    
	created_at DATETIME DEFAULT CURRENT_TIMESTAMP
	);";	

if($link->query($sql)===TRUE){
	echo " User Table crteated succesfully <br>";
}else{
	echo "Error creating table Customer <br>";
}

$link->close();

?>