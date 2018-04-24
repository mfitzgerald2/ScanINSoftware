<?php

require_once 'config.php';

// Create connection
// Check connection
if ($link->connect_error) {
     die("Connection failed: " . $link->connect_error);
} 

$sql = "SELECT FirstName, LastName, scanned FROM users WHERE parent = 3;";
$result = $link->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Current Students</th></tr>";
     // output data of each row
     echo "<tr><td>First Name</td><td>Last Name</td><td>Scanned?</td></tr>";
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["FirstName"]. "</td><td>" . $row["LastName"]. "</td><td>";
         if ($row['scanned'] == 1) { //student was checked in
			echo "Yes";
		}
		else { //student wasn't checked in
			echo "No";
		}
         echo "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$link->close();
?>  