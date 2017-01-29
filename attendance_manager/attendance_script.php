<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title> Check Your Attendance</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	  
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="../jquery.js"></script>
  
  
</head>
<body>

<h3>Choose subject</h3>

<form role="form"  method="POST" action="">

<?php
	
	if($_SESSION['student_module'] == 3)
	{
		echo 
		'<div class="form-group" id="sub">

			<select class="form-control" name="sub_list"> 
              <option value="ds" > Data Structures  </a></option><!--1-->
              <option value="psp" > Problem Solving and Programming </option><!--2-->
              <option value="co" > Computer Organization </option><!--3-->
              <option value="dsgt" > Discrete Structures and Graph theory</option><!--4-->
              <option value="deld" > Digital Electronics</option><!--5-->                   
              
              
            </select> 
            <hr>
 
        </div>';

        echo '<div></div>';

        echo '<div id="progressbar"></div>';

	}

	else if($_SESSION['student_module'] == 4)
	{
		echo 
		'<div class="form-group" id="sub">

			<select class="form-control" name="sub_list"> 
              <option value="popl" > Principles of Programming Languages  </a></option><!--1-->
              <option value="cg" > Computer Graphics </option><!--2-->
              <option value="mta" > Mathematical Transforms and Applications </option><!--3-->
              <option value="dc" > Data Communication </option><!--4-->
              <option value="mi" > Microprocessor&Interfacing</option><!--5-->                   
              
              
            </select> 
            <hr>
 
        </div>';

        echo '<div></div>';

        echo '<div id="progressbar"></div>';

	}

	else if($_SESSION['student_module'] == 5)
	{
		echo 
		'<div class="form-group" id="sub">

			<select class="form-control" name="sub_list"> 
              <option value="os" > Operating Systems </a></option><!--1-->
              <option value="cn" > Computer Networks </option><!--2-->
              <option value="toc" > Theory of Computation </option><!--3-->
              <option value="mam" > Microprocessors and Microcontrollers</option><!--4-->
              <option value="ads" > Advanced Data Structures </option><!--5-->                   
              
              
            </select> 
            <hr>
 
        </div>';

        echo '<div></div>';

        echo '<div id="progressbar"></div>';

	}

	else if($_SESSION['student_module'] == 6)
	{
		echo 
		'<div class="form-group" id="sub">

			<select class="form-control" name="sub_list"> 
              <option value="se" > Software Engineering  </a></option><!--1-->
              <option value="dbms" > Database Management Systems   </option><!--2-->
              <option value="daa" > Design and analysis of algorithms </option><!--3-->
              <option value="dsgt" > Object oriented Modelling and Design</option><!--4-->
              <option value="sp" > System Programming</option><!--5-->                   
              
              
            </select> 
            <hr>
 
        </div>';

        echo '<div></div>';

        echo '<div id="progressbar"></div>';

	}

	else if($_SESSION['student_module'] == 7)
	{
		echo 
		'<div class="form-group" id="sub">

			<select class="form-control" name="sub_list"> 
              <option value="dist_c" > Distributed Computing  </a></option><!--1-->
              <option value="bus_i" > Business Intelligence and Analytics </option><!--2-->
              <option value="elec1" > Elective 1 </option><!--3-->
              <option value="elec2" > Elective 2</option><!--4-->
                                 
              
              
            </select> 
            <hr>
 
        </div>';

        echo '<div></div>';

        echo '<div id="progressbar"></div>';

	}

	else if($_SESSION['student_module'] == 8)
	{
		echo 
		'<div class="form-group" id="sub">

			<select class="form-control" name="sub_list"> 
              <option value="ai" > Artificial Intelligence  </a></option><!--1-->
              <option value="cd" > Compiler Design </option><!--2-->
              <option value="elec3" > Elective 3 </option><!--3-->
              <option value="elec4" > Elective 4</option><!--4-->              
              
            </select> 
            <hr>
 
        </div>';

        echo '<div></div>';

        echo '<div id="progressbar"></div>';

	}

	echo ' <div class="col-xs-12 col-sm-3 col-md-6 col-lg-6 ">
              <input type="submit" name="manage_attendance" value="ManageAttendance" class="btn btn-lg btn-success btn-block"><hr>
    		</div>';



?>


<div>
	
	<div id = "subject_attendance_manager">
	</div>
</div>




<?php
if(isset($_POST['sub_list']))
{  
  $_SESSION['sub_name'] = $_POST['sub_list'];
  header("refresh:2;url=modifyattend.php");
}



?>



  

</body>
</html>
