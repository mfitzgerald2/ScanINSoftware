<!DOCTYPE html> 
<html>

<head>
  <title>SRTS Activity Monitor</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">   

    <header>
    <div id="strapline">
      <div id="welcome_slogan">
        <h3>SRTS Activity Monitor <span>Online Management</span></h3>
      </div><!--close welcome_slogan-->
      </div><!--close strapline-->    
    <nav>
	    <div id="menubar">
          <ul id="nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="viewdatabase.php">View Database</a></li>
            <li><a href="addstudents.php">Add Students</a></li>
            <li class="current"><a href="deletestudents.php">Scan Times</a></li>
            <li><a href="editstudents.php">Edit Students</a></li>
          </ul>
        </div><!--close menubar-->  
      </nav>
    </header>
    
    <div id="slideshow_container">  
    <div class="slideshow">
      <ul class="slideshow">
          <li class="show"><img width="940" height="250" src="images/oaklandlogo.png" /></li>
          <li><img width="940" height="250" src="images/school.png" /></li>
        </ul> 
    </div><!--close slideshow-->    
  </div><!--close slideshow_container-->   
  
  <div id="site_content">   
    
    <div class="sidebar_container">       
    <div class="sidebar">
          <div class="sidebar_item">
            <p>Please enter the LAST and FIRST name of the student you want to view.</p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->        
    <div class="sidebar">
          <div class="sidebar_item">
            <form action="delete.php" method="post">
		Last Name: <input type="text" name="last"><br>
		First Name: <input type="text" name="first"><br>
		<input type="Submit">
	    </form>
            <p></p>         
      </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
	<p>Enter the ID of the entry you want to delete.</p>
	<div class="sidebar">
          <div class="sidebar_item">
            <form action="deleteid.php" method="post">
		ID: <input type="text" name="ID"><br>
		<input type="Submit">
	    </form>
            <p></p>         
      </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
    <div class="sidebar">
          <div class="sidebar_item">
            <img src="images/epics.jpg" alt="HTML5 Icon" style="width:120px;height:25px;">
                    
      </div><!--close sidebar_item--> 
        </div><!--close sidebar-->      
        <div class="sidebar">
          <div class="sidebar_item">
            <img src="images/pu.png" alt="The P" style="width:120px;height:70px;">
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->
       </div><!--close sidebar_container--> 
     
    <div id="content">
	
        <div class="content_item">
<head>
<style>
table, th, td {
     border: 1px solid black;
}
</style> 
</head>

<?php
$servername = "localhost";
$username = "root";
$password = "pi";
$dbname = "srts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT LastName, number, FirstName,Class,grade,ScanTime FROM attendance INNER JOIN students on students.RFID=attendance.AtRFID ORDER BY ScanTime DESC;";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th><th>Scan Time</th><th>Class</th><th>Grade</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["number"]. "</td><td>".$row["LastName"].", ".$row["FirstName"]."</td><td>".$row["ScanTime"]. "</td><td>".$row["Class"]. "</td><td>".$row["grade"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
     
          <div class="content_item">
        <p>The above table is a table of when students were scanned in the morning.</p>          
            
      </div><!--close content_container-->  
      
    </div><!--close content_item-->
      </div><!--close content-->   
  </div><!--close site_content-->   

    <footer>
	  <a href="index.html">Home</a> | <a href="viewdatabase.php">View Database</a> | <a href="addstudents.php">Add Students</a> | <a href="deletestudents.php">Scan Times</a> | <a href="editstudents.php">Edit Students</a><br/>
    </footer>
  
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>
