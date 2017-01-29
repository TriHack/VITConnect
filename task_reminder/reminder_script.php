<?php
include('connect_to_reminder_db.php'); // Our database connectivity file

?>


<!DOCTYPE html>
<html>
<head>
	<title>Add Reminders</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  	<style>
  		.cover{
  			-webkit-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
			-moz-box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.75);
  		}

  		
  	</style>
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
<form name="setup_reminder" action="reminder_script.php" method="post" >

        	<div class="cover" style="align-items: center" style="margin-left: 70px;">

        	  <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label" style="margin-top:100px;margin-left: 70px;">
                <input class="mdl-textfield__input" type="text" id="reminder_name" name="reminder_name">
                <label class="mdl-textfield__label" for="reminder_name">Event to remind..</label>
              </div>

              <div></div>

              <div class="mdl-textfield mdl-js-textfield" style="margin-left: 70px;">
			    <textarea class="mdl-textfield__input" type="text" rows= "5" id="reminder_desc" name="reminder_desc" ></textarea>
			    <label class="mdl-textfield__label" for="reminder_desc" >Write Event Description...</label>
			  </div>

			  <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp" style="margin-left: 70px;">
			  	<tbody>

			  	<td>Trigger Date</td>
					<td>
					<select name="reminder_year">
					<?php
					$current_year = date("Y");
					for($counter=$current_year;$counter<=$current_year+2;$counter++)
					{
					echo("\n<option>$counter</option>");
					}
					?>
					</select>
					<select name="reminder_month">
					<?php
						for($counter=1;$counter<=12;$counter++)
						{
						if($counter < 10)
						$prefix = "0";
						else
						$prefix = " ";
						echo "\n<option>$prefix$counter</option>";
						}
						?>
						</select>
						<select name="reminder_date">
						<?php
						for($counter=1;$counter<=31;$counter++)
						{
						if($counter < 10)
						$prefix = "0";
						else
						$prefix = " ";
						echo("\n<option>$prefix$counter</option>");
						}
					?>
					</select>
				</td>
				</tbody>
				</table>
				<div>
					
				</div>

				<button class="mdl-button mdl-js-button mdl-button--fab mdl-button--colored" name="submit" style="margin-top:20px;margin-left: 70px;">
					  <i class="material-icons">add</i>
				</button>
				</div>

				<input name="step" type="hidden" value="1" />
		   </form>
	


</body>
</html>

<?php

if(isset($_POST['step']))
	{
		
			$error_list = "";
			$todays_date = date( "Ymd" );
			$reminder_date = $_POST['reminder_year'].$_POST['reminder_month'].$_POST['reminder_date'];
			if( empty($_POST['reminder_name']) )
			$error_list .= "No Reminder Name<br />";
			if( !checkdate( $_POST['reminder_month'], $_POST['reminder_date'], $_POST['reminder_year'] ))
			$error_list .= "Reminder Date is invalid<br />";
			else if( $reminder_date <= $todays_date )
			$error_list .= "Reminder Date is not a future date<br />";
			if( empty( $error_list ) )
			{
			// No error let's add the entry
				$sql = "INSERT INTO reminder_events(`reminder_name`, `reminder_desc`, `reminder_date`) VALUES('".addslashes($_POST['reminder_name'])."', '".addslashes($_POST['reminder_desc'])."', '".addslashes($reminder_date)."')";
				//('$student_name',' $student_email_id','$student_engg_yr','$student_module')";

				$insert = $mysqli->query($sql);
				// Let's go to the Reminder List page
				Header("Refresh: 1;url=list_reminders.php");
				echo 'Reminder Added, redirecting ...';

			}
			
			
			else
			
			{
				// Error occurred let's notify it
				echo( $error_list );
			}
		}
		
?>

