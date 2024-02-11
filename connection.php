<?php

/* 
 * Universal Copier
 * Project by  | 
 */

$server_name = "localhost:3307";
$username = "root";
$password = "";
$db_name = "med_rec_dir";

// Create connection

$db = new mysqli($server_name, $username, $password, $db_name);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
    echo "Connection failed";
}

// else{
//     echo "Connected successfully";
// }

/*
  try {
  $pdo = new PDO('mysql:host=localhost;dbname =  medical_records_directory', 'root', '');
  echo 'connected';
  } catch (PDOException $e) {
  exit('Database Error');
  } 
*/

?>



