<?php
include 'connect.php';

// Get the 'updateid' parameter from the URL and assign it to the $id variable
$id = $_GET['updateid'];

// Fetch the record from the 'crud' table with the matching 'id'
$sql = "SELECT * FROM crud WHERE id = $id";
$result = mysqli_query($conne, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];

// Check if the form is submitted
if (isset($_POST['submit'])) {
    // Retrieve the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // Update the record in the 'crud' table with the new values
    $sql = "UPDATE crud SET name='$name', email='$email', mobile='$mobile', password='$password' WHERE id = $id";
    $result = mysqli_query($conne, $sql);

    if ($result) {
        // If the query execution is successful, redirect the user to 'display.php' to show the updated records
        header('location:display.php');
    } else {
        // If there's an error with the query execution, terminate the script and display the error message
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name" autocomplete="off" value=<?php echo $name; ?>>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email; ?>>
            </div>
            <div class="mb-3">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your mobile number" name="mobile" autocomplete="off" value=<?php echo $mobile; ?>>
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password; ?>>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>

    </div>

</body>

</html>