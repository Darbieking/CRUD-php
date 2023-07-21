<?php

// Add Your Database Details Below
define('DB_HOST', '#####');
// Define the database host

define('DB_USER', '#####');
// Define the database username

define('DB_PASS', '#####');
// Define the database password

define('DB_NAME', '#####');
// Define the database name

// Creating connection
$conne = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// Create a new MySQLi object for establishing a database connection using the defined constants

// Check connection: The code below is to check if the database is connected
// if ($conne) {
//     echo 'Connection Successful';
// } else {
//     die(mysqli_error($conne));
// }

//Check connection
if (!$conne) {
    die(mysqli_error($conne));
    //If the database isnt connected , it will show an error message
}


// The code establishes a connection to a MySQL database using the provided host, username, password, and database name. It creates a new MySQLi object $conne to handle the database connection. If the connection fails, an error message is displayed, and the script is terminated.
