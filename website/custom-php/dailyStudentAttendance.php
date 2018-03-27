<style>
.boxIn {
	float: left;
    background-color: #0FBE7C; /* green */
    color: white; /* white text */
    text-align: center;
    width: 200px;
    height: 140px;
    margin: 25px;
    padding: 5px;
}

.boxOut {
	float: left;
	background-color: #FF0000; /* red */
    color: white; /* white text */
    text-align: center;
    width: 200px;
    height: 140px;
    margin: 25px;
    padding: 5px;
}
</style>

<?php

require_once 'config.php';
	
	//get users in alphabetical order
	$query = "SELECT FirstName, LastName, scanned FROM users WHERE parent = 3 ORDER BY Name ASC;"; //parent = 3 is a student
	$result = mysqli_query($link, $query);
	if (!$result) {
		echo "That didn't work.";
	}
	
	//display whether each student checked in
	while ($row = mysqli_fetch_array($result)) {
		if ($row['scanned'] == 1) { //student was checked in
			echo "<div class='boxIn'>
					<h2>" . $row['FirstName'] . "<br>" . $row['LastName'] . "<br><br>Checked In: Yes</h2>
				</div>";
		}
		else { //student wasn't checked in
			echo "<div class='boxOut'>
					<h2>" . $row['FirstName'] . "<br>" . $row['LastName'] . "<br><br>Checked In: No</h2>
				</div>";
		}
	}
	
	mysqli_close($link);
?>