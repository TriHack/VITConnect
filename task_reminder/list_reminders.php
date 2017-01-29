<?php
include('connect_to_reminder_db.php'); // Our database connectivity file
if( empty($_GET['reminder_id']) )
{
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../welcome/index.php">VIT Connect</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Reminders</a></li>
      <li><a href="../notesharing/index.html">Notes Share</a></li>
      <li><a href="../discussion_room/create_topic.php">Discussion Room</a></li>
      <li><a href="../attendance_manager/modifyattend.php">Attendence Manager</a></li>
    </ul>
  </div>
</nav>


<main class="mdl-layout__content">
    <div class="page-content">
<!--
    
	<nav class="navbar navbar-inverse navbar-fixed-top" >
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#"></a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li ><a href="#"><h3 style="color:black;">Home</h4></a></li>
	        <li ><a href="create_topic.php"><h3 style="color:black;">DiscussionForum</h4></a></li>
	   
	         
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	         <li ><a href="main_forum.php"><h3 style="color:black;">CurrentTopics</h4></a></li>        
	        <li style="font-weight:bold"><a href="#"><span class="glyphicon glyphicon-menu-hamburger" style="color:black"></span><h4 style="color:black;"> AboutUs</h4></a></li>  
	        <li style="font-weight:bold"><a href="#"><span class="glyphicon glyphicon-earphone" style="color:black"></span> <h4 style="color:black;">ContactUs</h4></a></li> 
	             

	      </ul>
	    </div>
	  </div>
	  </nav>
	  -->
	
    <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="margin-left:50px;margin-top:60px">
    <tr>
		<td colspan='3'><a href='reminder_script.php'>Add new Reminder</a></td>
	</tr>

	<?php

	$query = "SELECT * FROM reminder_events"; 
	$result = mysqli_query($mysqli,$query);


	$nr = mysqli_num_rows( $result );
	if(empty($nr))
	{
	echo("
	<tr>
	<td colspan='3'>No Reminders setup</td>
	</tr>
	");
	}
	while( $row = mysqli_fetch_array( $result ))
	{
		$reminder_name = $row["reminder_name"];
		$reminder_date = $row["reminder_date"];
		//formatting reminder date
		//$reminder_date = $row["reminder_date"]
		$reminder_date = $reminder_date[4].$reminder_date[5]." / ".$reminder_date[6].$reminder_date[7]." / ".
			substr($reminder_date,0,4);
		//echo $reminder_date;
		$reminder_id = $row["reminder_id"];
		echo("
		<tr>
		<td class='mdl-data-table__cell--non-numeric'>$reminder_name</td>
		<td >$reminder_date</td>
		<td ><a href='list_reminders.php?reminder_id=$reminder_id'>delete</a></td>
		</tr>
	");
	}
	mysqli_free_result( $result );
	?>
	</table>
	</body>
	</html>
	<?php
	}

	else
	{
	mysqli_query($mysqli,"DELETE FROM reminder_events WHERE reminder_id='".addslashes($_GET['reminder_id'])."'" );
	// Let's go back to the Reminder List page
	Header("Refresh: 1;url=list_reminders.php");
	echo "Reminder Deleted, redirecting..." ;
	}
	?>





</body>
</html>


