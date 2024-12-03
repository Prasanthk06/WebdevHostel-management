<html>
    <style>
        body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 20px;
            }
            p {
                color: #4CAF50;
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

    // getting all values from the HTML form

    if(isset($_POST['submit']))

    {

        $Name= $_POST['name'];
        $Email= $_POST['email'];
        $Password= $_POST['password'];

    }


    // database details


    $host = "localhost";

    $username = "root";

    $password = "";

    $dbname = "serenity hostel";


    // creating a connection


    $con = mysqli_connect($host, $username, $password, $dbname);


    // to ensure that the connection is made


    if (!$con)

    {

        die("Connection failed!" . mysqli_connect_error());

    }


    // using sql to create a data entry query


    $sql = "INSERT INTO MainDetails( std_Name,Emailid,std_Password) VALUES ('$Name', '$Email', '$Password')";

  

    // send query to the database to add values and confirm if successful

    $rs = mysqli_query($con, $sql);

    if($rs)

    {

        echo "<p>Entries added!</p>";
        echo "To Go To  Main page click The link Below";
        echo '<br>';
        echo '<a href="Serenity website.html">Main Page</a>';

    }

  

    // close connection

    mysqli_close($con);


?>