<?php

//connection variables
$host = 'localhost';
$user = 'root';
$password = '';

//create mysql connection
$mysqli = new mysqli($host,$user,$password);
if ($mysqli->connect_errno) {
    printf("Connection failed: %s\n", $mysqli->connect_error);
    die();
}

//create the database
if ( !$mysqli->query('CREATE DATABASE crud') ) {
    printf("Errormessage: %s\n", $mysqli->error);
}

//create users table with all the fields
$mysqli->query('
CREATE TABLE `crud`.`users` 
(
    `id` INT NOT NULL AUTO_INCREMENT,
    `first_name` VARCHAR(50) NOT NULL,
    `password` VARCHAR(50) NOT NULL,
    `mobile_no` VARCHAR(100) NOT NULL,
    `email` VARCHAR(100) NOT NULL,
    `age` INT(100) NOT NULL,
    `location` VARCHAR(100) NOT NULL,
PRIMARY KEY (`id`) 
);') or die($mysqli->error);

?>