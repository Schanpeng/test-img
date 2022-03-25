
//setting database connection so that you can just use require_once 'dbConfig', no need to connect database over and over

<?php  
// Database configuration  
$dbHost     = "localhost";  
$dbUsername = "root";  
$dbPassword = "root";  
$dbName     = "sell";  
  
// Create database connection  
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);  
  
// Check connection  
if ($db->connect_error) {  
    echo 'not connected';
    die("Connection failed: " . $db->connect_error); 
    
} else {
    echo 'connected to db ||| ';
}
?>