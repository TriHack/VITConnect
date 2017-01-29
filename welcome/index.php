<!DOCTYPE html>
<html>
<head>
	<title>Welcome!!</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
	<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>


	<!-- Uses a transparent header that draws on top of the layout's background -->
	<style>
	.demo-layout-transparent {
	  background: url('assets/img/bg3.jpg') center / cover;
	}
	.demo-layout-transparent .mdl-layout__header,
	.demo-layout-transparent .mdl-layout__drawer-button {
	  /* This background is dark, so we set text to white. Use 87% black instead if
	     your background is light. */
	  color: black;
	}
		#announcements{
			width: 300px;
			height: 400px;
			float: left;
			background: white;
			-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.75);
	
		}
		
		#reminders{
			margin-left: 100px;
			width: 300px;
			height: 400px;
			float: left;
			background: white;
			-webkit-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.75);
box-shadow: 0px 0px 4px 1px rgba(0,0,0,0.75);
		}
		
		#back{
			margin-right: auto;
			margin-top: 50px;
			margin-left: 300px;
			width: 700px;
			height: 400px;
		}
		#upper1{
			position: relative;
			width: 100%;
			background: #7C7CB2;
			height: 7%;
			color: white;
			font-size: 18px;
			font-family:sans-serif;
			text-align: center;
			justify-content: center;
			padding-top:5px; 
		}
		#upper2{
			position: relative;
			width: 100%;
			background: #7C7CB2;
			height: 7%;
			color: white;
			font-size: 18px;
			font-family: sans-serif;
			text-align: center;
			justify-content: center;
			padding-top: 5px;
		}
	</style>


</head>
<body>

	<script src="https://www.gstatic.com/firebasejs/3.6.7/firebase.js"></script>
		<script>
		  // Initialize Firebase
		  var config = {
			apiKey: "AIzaSyAxQbFG5UPgV3JyrIOsZjDhe1o6va0ijbs",
			authDomain: "vithacks-19341.firebaseapp.com",
			databaseURL: "https://vithacks-19341.firebaseio.com",
			storageBucket: "vithacks-19341.appspot.com",
			messagingSenderId: "108344437179"
		  };
		  firebase.initializeApp(config);
	</script>
	<div class="demo-layout-transparent mdl-layout mdl-js-layout">
    <header class="mdl-layout__header mdl-layout__header--transparent">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Dashboard</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="" style="color: black;" onclick="signOut(); return false;" >Sign Out</a>
        
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">VIT CONNECT</span>
    <nav class="mdl-navigation">
      <a class="mdl-navigation__link" href="../notesharing/index.html">SHARE YOUR NOTES</a>
      <a class="mdl-navigation__link" href="../discussion_room/create_topic.php">DISCUSSION ROOM</a>
      <a class="mdl-navigation__link" href="../attendance_manager/modifyattend.php">MANAGE ATTENDANCE</a>
	  <a class="mdl-navigation__link" href="../task_reminder/reminder_script.php">REMINDERS</a>
	  <a class="mdl-navigation__link" href="../about.php">ABOUT..</a>
    </nav>
  </div>
  <main class="mdl-layout__content">
	  <div id="back">
	  	<div id="announcements">
			<div id="upper1">
					ANNOUNCEMENTS
			</div>
		</div>
        <div id="reminders">
			<div id="upper2">
					REMINDERS
			</div>
		</div>
	  </div>
	  
  </main>
</div>


	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
	<script src='http://creativegiant.co/dev/codepen/signup/js/material.min.js'></script>
	<script src='http://creativegiant.co/dev/codepen/signup/js/ripples.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
	<script src="welcome_page.js"></script>
</body>
</html>