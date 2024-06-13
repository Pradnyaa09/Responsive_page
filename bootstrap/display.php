<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" type="text/css" href="new.css">
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 80%; /* Adjust table width */
            margin: auto; /* Center the table */
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<!-- <div class="navbar">
        <a href="new.php ">Home</a>
        <a href="record.php">Display</a>
        <a href="update.php">Update</a>
        <a href="search.php">Search</a>
    </div> -->

    <h1>User List</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Contact</th>
            <th>Message</th>

            
        </tr>
        <?php
        
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "contact";

       
        $conn = new mysqli($servername, $username, $password, $dbname);

    
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

   
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr><td>" . $row["name"] . "</td><td>" . $row["address"] . "</td><td>" . $row["contact"] . "</td><td>" . $row["msg"] . "</td></tr>";
            }
        } else {
            echo "<tr><td colspan='4'>0 results</td></tr>";
        }

        
        $conn->close();
        ?>
    </table>
</body>  
</html>
