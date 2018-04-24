<?php
// Include config file
require_once 'config.php';
 
$sql = "SELECT id, LastName, FirstName,grade,ScanTime FROM students INNER JOIN attendance on students.RFID=attendance.AtRFID WHERE LastName='$lastname' AND FirstName='$firstname' ORDER BY ScanTime DESC;";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Scan Time</th><th>Class</th><th>Grade</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["number"]. "</td><td>".$row["LastName"].", ".$row["FirstName"]."</td><td>".$row["ScanTime"]. "</td><td>".$row["grade"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>    