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
            <li class="current"><a href="addstudents.php">Add Students</a></li>
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
            <h2></h2>
            <p></p>
          </div><!--close sidebar_item--> 
        </div><!--close sidebar-->        
    <div class="sidebar">
          <div class="sidebar_item">
            
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

<?php
$lastname = $_POST['last'];
$firstname = $_POST['first']; 
$room = $_POST['class']; 
$id = $_POST['idnum']; 
$days = $_POST['dayswalked']; 
$grade = $_POST['grade'];

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

$sql = "INSERT INTO students (LastName, FirstName, RFID, DaysWalked, Class, grade, already)
VALUES ('$lastname', '$firstname', '$id','$days','$room','$grade','0')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    echo '<br>';
    echo 'Last Name:'; 
    echo $lastname;
    echo '<br>';
    echo 'First Name:'; 
    echo $firstname;
    echo '<br>';
    echo 'Classroom:'; 
    echo $room;
    echo '<br>';
    echo 'Grade:'; 
    echo $grade;
    echo '<br>';
    echo 'RFID Number:'; 
    echo $id;
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
     


        <div class="content_item">
</div><!--close content_container-->
      <h1>Complete the following fields to enter a student into the database.</h1> 
         
	<div class="content_item">
	<form action="success.php" method="post">
		Last Name: <input type="text" name="last"><br>
		First Name: <input type="text" name="first"><br>
		Classroom: <input type="text" name="class"><br>
		Grade: <input type="text" name="grade"><br>
		RFID Number: <input type="text" name="idnum"><br>
		<input type="submit">
		<input type="submit" formaction="rfidnum.php" value="Read RFID Number">
 	  </form>
	</div><!--close content_container-->
     
        <div class="content_item">
		<p>Fill out the above fields to add a student to the database.</p> 
		<p>TO ENTER RFID TAG NUMBER: Hold desired tag infront of the reader for 2 seconds. Then click the "Read the RFID Tag" button.</p>
		<p>If a student has walked to school outside of the program you can enter how many days they have already walked (otherwise just enter 0).  To edit a current walkers information please visit the "Edit Students" page.</p>            
      	</div><!--close content_container-->  
      
    	</div><!--close content_item-->
     		 </div><!--close content-->   
 	 </div><!--close site_content-->

    <footer>
	  <a href="index.html">Home</a> | <a href="viewdatabase.php">View Database</a> | <a href="addstudents.php">Add Students</a> | <a href="deletestudents.php">Scan Times</a> | <a href="editstudents.php">Edit Students</a><br/><br/>
	 website template by <a href="http://www.freehtml5templates.co.uk">Free HTML5 Templates</a>
    </footer>
  
  </div><!--close main-->
  
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/image_slide.js"></script>
  
</body>
</html>
