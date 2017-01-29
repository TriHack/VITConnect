<!DOCTYPE html>
<html lang="en">
<head>
  <title>View Topic</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>

 
  </style>

<?php

Include('connect.php');
$tbl_name="forum_question"; // Table name 
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result = $mysqli->query($sql);

$rows1 = mysqli_fetch_array($result,MYSQLI_ASSOC);
?>


   <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../welcome/index.php">VIT Connect</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="../task_reminder/reminder_script.php">Reminders</a></li>
      <li><a href="../notesharing/index.html">Notes Share</a></li>
      <li class="active"><a href="../discussion_room/create_topic.php">Discussion Room</a></li>
      <li class="active"><a href="../discussion_room/main_forum.php">Current Discussion Topics</a></li>
      <li><a href="../attendance_manager/modifyattend.php">Attendence Manager</a></li>
    </ul>
  </div>
</nav>

<div class="container" style="margin-top:50px;">

	<div >

  			<b><h3 style="text-align:center">Topic of discussion</h3></b>

	</div>

	<div class="well well-lg">

		<?php echo '<h5><B>'.$rows1['topic'].'</h5></B><BR>'; ?>
		
	</div>

	
	    <div class="panel panel-success">
		    <div class="panel-heading" style="text-align:left;word-wrap:break-word;">

		    	<?php echo '<b>By :: '.$rows1['name'].'</b><br>'; ?>
		    	<?php echo '<b>Email :: '.$rows1['email'].'</b>'; ?>

		    	<div class="panel-heading" style="text-align:right">
		    	
		    		<?php echo '<b>'.$rows1['datetime'].'</b>'; ?>
		    		
		    	</div>
		    	
		    </div>
		    
		    <div class="panel-body" style="word-wrap:break-word;"><?php echo $rows1['detail']; ?></div>
		</div>

	
</div>
<hr>
<div >

  	<b><h3 style="text-align:left;margin-left:100px">Replies</h3></b>

</div>


<BR>

<?php

$tbl_name2="forum_answer"; // Switch to table "forum_answer"

$sql2="SELECT * FROM $tbl_name2 WHERE question_id='$id'";
$result2=$mysqli->query($sql2);

while($rows2=mysqli_fetch_array($result2))
{
?>

<div class="container">
   <div class="panel panel-success">

	<div class="col-md-4 panel-heading">

		<div class="well well-lg">
			#:<?php echo $rows2['a_id']; ?><br>
			Name:<?php echo $rows2['a_name']; ?><br>
			Email:<?php echo $rows2['a_email']; ?><br>
			Date/Time:<?php echo $rows2['a_datetime']; ?>

		</div>
		
	</div>

	<div class="col-md-8 panel-body" style="word-wrap:break-word;">		
			<?php echo $rows2['a_answer']; ?>
	</div>
	
  </div>
 </div>
<hr><br>

 

<?php
}

$sql3="SELECT view FROM $tbl_name WHERE id='$id'";
$result3=$mysqli->query($sql3);

$rows=mysqli_fetch_array($result3);
//$row=mysqli_fetch_array($res)
$view=$rows['view'];

 

// if have no counter value set counter = 1
if(empty($view))
{
$view=1;
$sql4="INSERT INTO $tbl_name(view) VALUES('$view') WHERE id='$id'";
$result4=$mysqli->query($sql4);
}

 

// count more value
$addview=$view+1;
$sql5="update $tbl_name set view='$addview' WHERE id='$id'";
$result5=$mysqli->query($sql5);

$mysqli->close();
?>


<BR>

<div class="container">
	

<form method="post" action="add_answer.php">
	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="f_name">Name</label>
								<input type="text" placeholder="Enter your Name.."  name="a_name" id="a_name" class="form-control">
							</div>
							
	</div>

	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="a_email">Email</label>
								<input type="text" placeholder="Enter your email.."  name="a_email" id="a_email" class="form-control">
							</div>
							
	</div>	

	<div class="row">
							<div class="col-sm-6 form-group">
								<label for="a_answer">Answer</label>
								<textarea rows="5" placeholder="Enter your reply.."  name="a_answer" id="a_answer" class="form-control"></textarea>
							</div>
							
	</div>	
	<div class="row">

					<div class="col-md-6">
              				<input type="submit" name="Submit" value="SUBMIT" class="btn btn-lg btn-success btn-block">
          			</div>		
	</div>

	<br><br><hr>		
		
		<tr>
			<td>&nbsp;</td>
			<td><input name="id" type="hidden" value="<?php echo $id; ?>"></td>
			<!--<td><input type="submit" name="Submit" value="Submit"> <input type="reset" name="Submit2" value="Reset"></td>-->
		</tr>
		
	</td>
</form>

</div>



