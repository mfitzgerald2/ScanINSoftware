<!DOCTYPE html> 
<html>

<head>
  <title>SRTS Oakland Elementary</title>
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
        <h3>SRTS Oakland Elementary <span>Online Management</span></h3>
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

$link = mysql_connect('localhost', 'root', 'pi');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
if (!mysql_select_db('srts')) {
    die('Could not select database: ' . mysql_error());
}
$result = mysql_query('SELECT RFID FROM tag');
if (!$result) {
    die('Could not query:' . mysql_error());
}

$value = mysql_result($result, 0);
//echo mysql_result($result, 0); // outputs third employee's name

mysql_close($link);
?>


      <h1>Complete the following fields to enter a student into the database.</h1> 
        <div class="content_item">
	<form action="success.php" method="post">
		Last Name: <input type="text" name="last" value="<?php echo htmlspecialchars($lastname); ?>"><br>
		First Name: <input type="text" name="first" value="<?php echo htmlspecialchars($firstname); ?>" ><br>
		Classroom: <input type="text" name="class" value="<?php echo htmlspecialchars($room); ?>"><br>
		Grade: <input type="text" name="grade" value="<?php echo htmlspecialchars($grade); ?>"><br>
		RFID Number: <input type="text" name="idnum" value="<?php echo htmlspecialchars($value); ?>"><br>
		<input type="submit">
		<input type="submit" formaction="rfidnum.php" value="Refresh RFID Number">
 	  </form>
  
	</div><!--close content_container-->
     
          <div class="content_item">
	
        <p><br><br><br>Fill out the above fields to add a student to the database. If the student is new to the program you can enter how many days they have already walked (otherwise just enter 0).  To edit a current walkers information please visit the "Edit Students" page.</p>          
            
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
