<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
<div class="navbar">
        <a href="index.html ">Home</a>
        <a href="display.php">Display</a>
        <!-- <a href="update.php">Update</a>
        <a href="search.php">Search</a> -->
    </div> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        .h1 {
            font-size: 36px;
            color: #cb9cf7;
        }
        
        .navbar {
            overflow: hidden;
            background-color: #333;
            text-align: center;
        }

        .navbar a {
            display: inline-block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 20px;
            text-decoration: none;
            transition: background-color 0.3s, color 0.3s;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
    </style>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contact";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$msg = $_POST['msg'];

$sql = "INSERT INTO user (name, address, contact, msg) VALUES ('$name', '$address', '$contact', '$msg')";

if ($conn->query($sql) === TRUE) {
  
    echo "<h1> <center>  New record created successfully </center> </h1> ";
  
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>