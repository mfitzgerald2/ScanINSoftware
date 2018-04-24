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
            <li class="current"><a href="viewdatabase.php">View Database</a></li>
            <li><a href="addstudents.php">Add Students</a></li>
            <li><a href="deletestudents.php">Scan Times</a></li>
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
          <style>
		table, th, td {
     		border: 1px solid black;
		}
	  </style>
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

$sql = "SELECT DISTINCT(Class) AS Class FROM students ORDER BY Class ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Current Classes</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["Class"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}
$conn->close();
?>  
            <p></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->        
    <div class="sidebar">
          <div class="sidebar_item">
            <form action="sortbyclass.php" method="post">
		Class Lookup: <input type="text" name="class"><br>
		<input type="submit">
	    </form>
            <p></p>         
      </div><!--close sidebar_item--> 
        </div><!--close sidebar-->

<div class="sidebar">
          <div class="sidebar_item">
          <style>
		table, th, td {
     		border: 1px solid black;
		}
	  </style>
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

$sql = "SELECT DISTINCT(grade) AS grade FROM students ORDER BY grade ASC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     echo "<table><tr><th>Current Grades</th></tr>";
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<tr><td>" . $row["grade"]. "</td></tr>";
     }
     echo "</table>";
} else {
     echo "0 results";
}

$conn->close();
?>  
            <p></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->  


<div class="sidebar">
          <div class="sidebar_item">
            <form action="sortbygrade.php" method="post">
		Grade Lookup: <input type="text" name="grade"><br>
		<input type="submit">
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
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="pi"; // Mysql password 
$db_name="srts"; // Database name 
$tbl_name="students"; // Table name 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$value = $_POST['class'];
$sql="Select Class, grade,RFID,LastName, FirstName,id, Count(AtRFID),already From students LEFT JOIN attendance ON attendance.AtRFID=students.RFID WHERE Class='$value' GROUP BY id ORDER BY LastName;";
$result= $conn->query($sql);   //mysqli_query($sql);
$count=mysqli_num_rows($result);
?>

<table width="400" border="0" cellspacing="1" cellpadding="0">
<tr>
<td><form name="form1" method="post" action=""><table width="400" border="0" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC"><tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="8" align="center" bgcolor="#FFFFFF"><strong>All Currently Participating Students</strong> </td>           
</tr>
<tr>
<td align="center" bgcolor="#FFFFFF">#</td>
<td align="center" bgcolor="#FFFFFF"><strong>LastName</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>FirstName</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Active Transport Days</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Class</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Grade</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>RFID</strong></td>
<td align="center" bgcolor="#FFFFFF"><strong>Walked Today?</strong></td>
</tr>
<?php while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)){ ?>
<tr>
<td align="center" bgcolor="#FFFFFF"><input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $rows['RFID']; ?>"></td>
<td bgcolor="#FFFFFF"><?php echo $rows['LastName']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['FirstName']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Count(AtRFID)']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['Class']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['grade']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['RFID']; ?></td>
<td bgcolor="#FFFFFF"><?php echo $rows['already']; ?></td>
</tr>
<?php } ?>
<tr>
<td colspan="8" align="center" bgcolor="#FFFFFF">
<input name="delete" type="submit" id="delete" value="Delete"></td>
</tr>
<?php

if(isset($_POST['delete']))
{
	$checkbox = $_POST['checkbox'];
	print_r($checkbox);
	for($i=0;$i<count($_POST['checkbox']);$i++)
	{
		$del_id = $checkbox[$i];
		$sql = "DELETE FROM $tbl_name WHERE RFID='$del_id'";
		$conn->query($sql);
		$result = $conn->query($sql);
	}
	if($result)
		{echo "<meta http-equiv=\"refresh\" content=\"0;URL=sortbyclass.php\">";}
}
mysqli_close();
?>

</table></form></td></tr></table>
<p>Student count: <?php echo number_format($count) ?></p>
     
          <div class="content_item">
        <p>The above table is a view of a single class. Students are arranged alphabetically.</p>          
            
      </div><!--close content_container-->  
      
    </div><!--close content_item-->
      </div><!--close content-->   
  </div><!--close site_content-->   

    <footer>
	  <a href="index.html">Home</a> | <a href="viewdatabase.php">View Database</a> | <a href="addstudents.php">Add Students</a> | <a href="deletestudents.php">Delete Students</a> | <a href="editstudents.php">Scan Times</a><br/><br/>
	 website template by <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
    </footer>
  
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>

