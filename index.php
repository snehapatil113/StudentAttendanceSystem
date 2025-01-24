<?php
  session_start();
  $isIndex = 1;
  if(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id'])) {
   header('Location: teacher.php');
  } else {
    if(!$isIndex) header('Location: index.php');
  }
?>
<!DOCTYPE html>
<html>
 <head>
 
	<script type="text/javascript">
	function validate()
	{
	 if (document.getElementById("username").value == "admin") 
	 {
		if (document.getElementById("password").value == "1234")
		{
                alert("suceesful ");
				//return window.open ("file:\\C:\xampp\htdocs\project\teacher.html","mywindow");
				return true;
        } 
		else 
		{
			alert("enter correct password");
              return false;
		}
	}
	else
	{
		alert("enter correct username");
		return false;
	}
		
	
	}
	
	
	
	
	
	</script>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Student Attendance</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/login.js"></script>
   <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <style type="text/css">
    	body {
    		background-image: url('img/bg1.jpg');
    		
    		background-size: 200%;
    		
        font-style:bold;

    	}
    	.table{
    		color:white;
    	}
    	 

    </style>
 </head>
 <body>
 
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Online Attendance</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="home.html">Home</a></li>
           
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  <div class="container">
    <h2>For Students</h2>
    <h4>Click here for <a href="student.php">Student Dashboard</a></h4>
    <hr>
    <h2>For Faculty</h2>
	
    <div class="alert alert-warning hidden">
      <span></span>
      <button type="button" class="close" onclick="$('.alert').addClass('hidden');">&times;</button>
    </div>
    <table class="table table-bordered table-striped" style="">
      <thead>
        <tr>
          <th>Staff login</th>
          <th>Admin login</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td style="background:transparent;">
            <form id="login">
              <div class="form-group">
                <label>Email ID</label>
                <input class="form-control" placeholder="Email" type="email" name="email">
              </div>
              <div class="form-group">
                <label>Password</label>
                <input class="form-control" placeholder="Password" type="password" name="password">
              </div>
              <button class="btn btn-primary pull-right">Login</button>
            </form>
          </td>
          <td style="background:transparent;">
		  
		  
		  
		  
           <form onsubmit="return validate();" action="admin.php">
              <div class="form-group">
                <label>Username</label>
                <input type="textbox"  name="username" id="username" class="form-control" placeholder="username"> 		<br>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="textbox"  name="password" id="password" class="form-control" placeholder="password">		<br>
              </div>
              <div class="form-group">
              
             <button class="btn btn-primary pull-right">Login</button>
              </div>
             
            </form>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
     

    </div><!-- /.container -->

 </body>
</html>
