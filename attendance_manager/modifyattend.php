<?php
session_start();
?>
<?php
//echo $_SESSION['sub_name']  ;
?>


<!DOCTYPE html>
<html>
<head>
  <title>Manage Attendance</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</head>

<body>
    <!-- Always shows a header, even in smaller screens. -->
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../welcome/index.php">VIT Connect</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="../task_reminder/reminder_script.php">Reminders</a></li>
      <li><a href="../notesharing/index.html">Notes Share</a></li>
      <li><a href="../discussion_room/create_topic.php">Discussion Room</a></li>
      <li class="active"><a href="../attendance_manager/modifyattend.php">Attendence Manager</a></li>
    </ul>
  </div>
</nav>
      <main class="mdl-layout__content">
        <div class="page-content">
            <!-- Your content goes here -->
            <form method = "post" action="show_results.php" style="margin-left:50px " >

              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="la" name="lec_att">
                <label class="mdl-textfield__label" for="engg_yr">Enter the number of Lectures Attended..</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
              </div>

              <div></div>

              <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="lc" name="lec_con">
                <label class="mdl-textfield__label" for="engg_yr">Enter the number of Lectures Conducted..</label>
                <span class="mdl-textfield__error">Input is not a number!</span>
              </div>

              <div></div>

              <!-- Mini FAB button -->
				<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" name="calculate">
				  Check your status!
				</button>

				<?php
						if(isset($_POST['calculate']))
						{  
						  $lectures_attended= $_POST['lec_att'];
						  $lectures_conducted = $_POST['lec_con'];

						  $_SESSION['lectures_attended'] = $lectures_attended;
						  $_SESSION['lectures_conducted'] = $lectures_conducted;
						  
						  header("refresh:2;url=show_results.php");
						  
						}

						?>

              


              
        </div>
      </main>
    </div>

    
  </body>
</html>



