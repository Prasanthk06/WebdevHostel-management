<html>
    <style>
        body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            p {
                color: #E91E63;
                font-size: 18px;
                font-weight: bold;
                margin-top: 20px;
            }
            a {
                display: inline-block;
                margin-top: 10px;
                padding: 10px 15px;
                background-color: #007BFF;
                color: white;
                text-decoration: none;
                border-radius: 5px;
            }
            a:hover {
                background-color: #0056b3;
            }
    </style>
</html>


<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    
    echo '<script>
    let a;
    a = prompt("enter");</script>';

    // Database connection details
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "serenity hostel";

    // Create a database connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Check if the email exists
    $sql = "SELECT * FROM MainDetails WHERE Emailid = '$email'";
    $result = mysqli_query($con, $sql);

    if (mysqli_num_rows($result) > 0) {
        // If email exists, delete the account
        $deleteSql = "DELETE FROM MainDetails WHERE Emailid = '$email'";
        if (mysqli_query($con, $deleteSql)) {
            echo "<p>Your account has been deleted successfully.</p>";
            echo "<p>If u want To go to main Page</p>";
            echo '<br>';
            echo '<a href="Serenity website.html">Go to Main Page</a>';
            echo '<br>';
            echo "<p>If you want to create an account,</p>";
            echo '<br>';
            echo '<a href="login.html">Go to Login Page</a>';

        } else {
            echo "Error deleting account: " . mysqli_error($con);
        }
    } else {
        echo "Email not found. Please enter a registered email.";
    }

    // Close the connection
    mysqli_close($con);
}
?>