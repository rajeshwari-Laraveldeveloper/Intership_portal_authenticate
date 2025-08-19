<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "internship";

try {
    $conn = new PDO("mysql:host=$servername", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    $sql = "CREATE DATABASE IF NOT EXISTS {$dbname}";
    // use exec() because no results are returned
    $conn->exec($sql);
    
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
$conn = null;
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS registercandidate (
    CandidateID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Firstname VARCHAR(30) NOT NULL,
    Lastname VARCHAR(30) NOT NULL,
    Email VARCHAR(30) NOT NULL,
    Password VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "Table MyGuests created successfully";
} catch (PDOException $e) {
    echo "database not connected.." . $e->getMessage();
}

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS registeremployer (
    EmployerID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Fullname VARCHAR(30) NOT NULL,
    Companyname VARCHAR(30) NOT NULL,
    companyemail VARCHAR(30) NOT NULL,
    Password VARCHAR(30) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "Table MyGuests created successfully";
} catch (PDOException $e) {
    echo "database not connected.." . $e->getMessage();
}


session_start();

?>