<?php
include 'connect.php';

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Get form data
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $mobile = filter_input(INPUT_POST, 'mobile', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    // Create SQL query to insert data into the 'crud' table
    $sql = "INSERT INTO crud (name , email, mobile, password) VALUES ('$name','$email','$mobile','$password')";

    // Execute the SQL query
    $result = mysqli_query($conne, $sql);

    if ($result) {
        // If the database insertion is successful, redirect to 'display.php'
        header('location:display.php');
    } else {
        // If there's an error with the database query, display the error message
        die(mysqli_error($conne));
    }
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Crud App</title>
</head>

<body>
    <div class="container mt-5">
        <form method="post">
            <div class="mb-3">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>

    </div>


</body>

</html>