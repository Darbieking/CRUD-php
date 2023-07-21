<?php include 'connect.php'; ?>
<!-- Include the 'connect.php' file to establish a database connection -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Crud App</title>
</head>

<body>
    <div class="container my-5">
        <button type="button" class="btn btn-dark"><a href="user.php" class="text-light text-decoration-none">Add user</a> </button>
        <!-- Create a button with a link to 'user.php' page to add a user -->

        <table class="table my-5">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Update/Delete</th>
                </tr>
            </thead>
            <tbody>

                <?php
                $sql = 'SELECT * FROM crud';
                // Define the SQL query to retrieve data from the 'crud' table
                $result = mysqli_query($conne, $sql);
                // Execute the SQL query and get the result

                if ($result) {
                    // Check if the query execution was successful
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Loop through each row in the result set
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        // Assign values from the row to variables

                        echo '<tr>
                            <th scope="row">' . $id . '</th>
                            <td>' . $name . '</td>
                            <td>' . $email . '</td>
                            <td>' . $mobile . '</td>
                            <td>' . $password . '</td>
                            <td>
                                <button type="button" class="btn btn-success"><a href="update.php?updateid=' . $id . '" class="text-light text-decoration-none">Update</a></button>
                                <button type="button" class="btn btn-warning"><a href="delete.php?deleteid=' . $id . '" class="text-dark text-decoration-none">Delete</a></button>
                        </tr>';
                        // Output the table row with the retrieved data and the update/delete buttons
                    }
                }

                ?>

            </tbody>
        </table>
    </div>

</body>

</html>

<!-- The code above performs the following tasks:

It includes the 'connect.php' file to establish a database connection.
It creates an HTML table structure using Bootstrap for styling.
It defines a SQL query to retrieve data from the 'crud' table.
It executes the SQL query and retrieves the result using mysqli_query().
It checks if the query execution was successful using an if statement.
It loops through each row in the result set using a while loop.
It assigns the values from each row to variables for further processing.
It generates an HTML table row (<tr>) with the retrieved data and adds update/delete buttons.
It outputs the generated HTML table rows with the data and buttons.
The rest of the code includes HTML markup for the page structure, Bootstrap CSS, and necessary JavaScript dependencies.
Please note that this code assumes the presence of corresponding pages like 'user.php', 'update.php', and 'delete.php' to handle the respective functionality. -->