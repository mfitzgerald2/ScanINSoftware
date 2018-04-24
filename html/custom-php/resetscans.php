<?php
// Include config file
require_once 'config.php';
 
if (isset($_POST['button1'])) 
{ 
  $sql = "UPDATE users SET scanned = 0";
  $stmt = mysqli_prepare($link, $sql);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  mysqli_close($link);
  echo "Reset Sucessfully. Please reload the page";
}  
?>

<form method="POST" action=''>
<input type="submit" name="button1"  value="Reset Scans">
</form>