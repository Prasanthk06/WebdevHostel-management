<?php
if (isset($_POST['submit'])) {
    $email = $_POST['email'];

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
        // If email exists, generate a random password
        $newPassword = substr(md5(time()), 0, 8);  // Random 8-character password

        // Update the password in the database
        $updateSql = "UPDATE MainDetails SET std_Password = '$newPassword' WHERE Emailid = '$email'";
        if (mysqli_query($con, $updateSql)) {
            echo "Password reset successfully. Your new password is: $newPassword";
        } else {
            echo "Error updating password: " . mysqli_error($con);
        }
    } else {
        echo "Email not found. Please enter a registered email.";
    }

    // Close the connection
    mysqli_close($con);
}
?>
