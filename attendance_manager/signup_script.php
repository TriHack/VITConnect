
<?php
//start php tag
//include connect.php page for database connection
session_start();
Include('connect_attendance_db.php');
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['SUBMIT_MESSAGE'])) // name of the button 
{
// checking the submitted text box for null value by giving there name.
  if($_REQUEST['name']=="" || $_REQUEST['e_id']==""||$_REQUEST['module']==""||$_REQUEST['engg_yr']=="")
  {
        echo " <br><br><br<br><br><br>All the fields must be filled";
  }
  else
  {

      $student_name = $_POST['name'];
      $student_email_id = $_POST['e_id'];
      $student_engg_yr = $_POST['engg_yr'];
      $student_module = $_POST['module'];
      
      $_SESSION['student_name'] = $_POST['name'];
      $_SESSION['student_email_id'] = $_POST['e_id'];
      $_SESSION['student_engg_yr'] = $_POST['engg_yr'];
      $_SESSION['student_module'] = $_POST['module'];
      
      $sql = "INSERT INTO student (name,email,year,module) VALUES ('$student_name',' $student_email_id','$student_engg_yr','$student_module')";
      $insert = $mysqli->query($sql);
  
       // Print response from MySQL
        if ( $insert ) 
        {
            echo "<br><br><br><br<br><br>CONGRATULATIONS ! YOU ARE A NEW MEMBER OF OUR COMMUNITY....<br>YOU CAN NOW LOGIN . ";

            header("Location: attendance_script.php");
            

        } 
        else 
        {
            die("Error: {$mysqli->errno} : {$mysqli->error}");
        }
  
  // Close our connection
  $mysqli->close();
  }
} 
?>

