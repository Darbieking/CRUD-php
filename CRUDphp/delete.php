<?php
include 'connect.php';

// Check if the 'deleteid' parameter is set in the URL
if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];
    // Get the value of 'deleteid' from the URL and assign it to the $id variable

    $result = "DELETE FROM crud where id = $id";
    // Create an SQL DELETE statement to remove the record from the 'crud' table with a matching 'id' value

    $result = mysqli_query($conne, $result);
    // Execute the SQL query using mysqli_query()

    if ($result) {
        // If the query execution is successful
        header('location:display.php');
        // Redirect the user to 'display.php' to show the updated records
    } else {
        die(mysqli_error($conne));
        // If there's an error with the query execution, terminate the script and display the error message
    }
}
