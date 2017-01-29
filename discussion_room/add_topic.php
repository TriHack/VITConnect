<!DOCTYPE html>
<html lang="en">
<head>
  <title>Discussion Forum</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style type="text/css">

  	.jumbotron
  	{
    background: url("jumbotron_images/Done.png") no-repeat center center ;
    height:350px;
    margin-top:20px; 
    
	}
  </style>

<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
$tbl_name="forum_question"; // Table name 
//if submit is not blanked i.e. it is clicked.
if (isset($_REQUEST['submit_post'])) //here give the name of your button on which you would like    //to perform action.
{
// here check the submitted text box for null value by giving there name.
  if($_REQUEST['topic']=="" || $_REQUEST['detail']==""||$_REQUEST['name']==""||$_REQUEST['email']=="")
  {
        echo " <br><br><br<br><br><br>All the fields must be filled...";
        //header(location)
        header("Refresh:3; url=create_topic.php");
 		echo "<br><br>We are redirecting you to initial page... Please re-enter the information..";

  }
  else
  {
  	// get data that was sent from crete_topic.php 
		$topic=$_POST['topic'];
		$detail=$_POST['detail'];
		$name=$_POST['name'];
		$email=$_POST['email'];

		$datetime=date("d/m/y h:i:s"); //create date time

		$sql="INSERT INTO $tbl_name(topic, detail, name, email, datetime)VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
		
		$insert = $mysqli->query($sql);

		if($insert)
		{
		echo "<div class='jumbotron' >

		      </div>";	
		echo " <div class='alert alert-success' role='alert' style='text-align:center;' ><b>Your topic was successfully posted..</b></div>";
		echo "<div class='well well-lg' style='text-align:center;'><a href=main_forum.php><b>View your topic</b></a><div>";
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

