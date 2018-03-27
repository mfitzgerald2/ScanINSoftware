<?php

require_once 'config.php';

// Create connection
// Check connection
if ($link->connect_error) {
     die("Connection failed: " . $link->connect_error);
} 

$sql = "SELECT * FROM users";
$result = $link->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Current Students</th></tr>";
     // output data of each row
     echo "<tr><td>Username</td><td>First Name</td><td>Last Name</td><td>Grade</td></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["username"]. "</td><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>" . $row["grade"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$link->close();
?>  