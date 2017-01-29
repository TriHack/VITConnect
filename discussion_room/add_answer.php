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


<?php

Include("connect.php");
$tbl_name="forum_answer"; // Table name

$id=$_POST['id'];

// Find highest answer number.
$sql="SELECT MAX(a_id) AS Maxa_id FROM $tbl_name WHERE question_id='$id'";

$result = $mysqli->query($sql);

$rows=mysqli_fetch_array($result);

// add + 1 to highest answer number and keep it in variable name "$Max_id". if there no answer yet set it = 1
if ($rows) 
{
$Max_id = $rows['Maxa_id']+1;
}
else {
$Max_id = 1;
}

// get values that sent from form
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];
$a_answer=$_POST['a_answer'];

$datetime=date("d/m/y H:i:s"); // create date and time


// Insert answer
$sql2="INSERT INTO $tbl_name(question_id, a_id, a_name, a_email, a_answer, a_datetime)VALUES('$id', '$Max_id', '$a_name', '$a_email', '$a_answer', '$datetime')";
$result2=$mysqli->query($sql2);

if($result2)
{

		echo "<div class='jumbotron' >

		      </div>";	
		echo " <div class='alert alert-success' role='alert' style='text-align:center;' ><b>Your reply was successfully posted..</b></div>";
		echo "<div class='well well-lg' style='text-align:center;'><a href='view_topic.php?id=".$id."'>View your answer</a><div>";

// If added new answer, add value +1 in reply column
$tbl_name2="forum_question";
$sql3="UPDATE $tbl_name2 SET reply='$Max_id' WHERE id='$id'";
$result3=$mysqli->query($sql3);

}
else 
{
echo "ERROR";
}

// Close connection

$mysqli->close();
?>