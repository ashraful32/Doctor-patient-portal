<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'title/website_title.php';?>
  <!-- <title>WebSiteName</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Add a gray background color and some padding to the footer */
	
	.navbar-default{
	  background-color: Aqua;
	}
	
	 .navbar-default .container-fluid .navbar-nav > li > a{
         
          color: black;
   }
   
   .navbar-default .container-fluid .navbar-header .navbar-brand{
          color: black;
   }
   
    .navbar-default .container-fluid .navbar-nav > li > a:hover{
          
          background-color: blue;
          color: black;
   }
	
	 .navbar-default .container-fluid .navbar-nav .dropdown .dropdown-menu > li > a:hover{
   
       background-color: blue;
          color: black;
   }
   
   .container .well > h3 > a:hover{
      
       color: orange;
	   text-decoration: none;
	 
   }
  
	
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .carousel-inner img {
      width: 100%; /* Set width to 100% */
      min-height: 200px;
    }

    /* Hide the carousel text when the screen is less than 600 pixels wide */
    @media (max-width: 600px) {
      .carousel-caption {
        display: none; 
      }
    }
	
	
	div.con1{
	background-color: white;
	margin-top: -20px;
	width:100%;
	border: 1px solid blueviolet;
	color: blue;
}

div.con2 a{
	
	color: red;
	margin-left: 1200px;
}

div.search2{
   margin-left: 400px;
}

div.search1{
    	margin-left: 200px;

   }
   
      body {
    background-color: #eee;
}

*[role="form"] {
    max-width: 770px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
    margin-left: 5em;
    margin-bottom: 1em;
}
   
    
	 
	 

  </style>
</head>
<body>


<nav class="navbar navbar-default">
    
    <?php include 'navbar1.php';?>
<!--
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="home.php">Home</a></li>
        <li><a href="#">About</a></li>
		<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">For Doctors <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Doctors Community</a></li>
		   <li><a href="#">Upcoming events</a></li>
        <li><a href="doctor_registration.php">Doctor Registration</a></li>
		    <li><a href="doctor_login.php">Doctor Login</a></li>
			 <li><a href="receptionist_login.php">Doctor Receptionist</a></li>
        </ul>
      </li>
	  
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">For Patients <span class="caret"></span></a>
        <ul class="dropdown-menu">
		    <li><a href="appointment.php">Doctor Appointment</a></li>
		   <li><a href="#">Doctor Overview</a></li>
		    <li><a href="#">Disease Symptoms input</a></li>
          <li><a href="user_registration.php">Registration</a></li>
          <li><a href="user_login.php">Login</a></li>
		    <li><a href="user_login.php">Store medical record</a></li>
			 <li><a href="#">Health Tips</a></li>
        </ul>
      </li>
	
		<li><a href="blood_donor.php">Blood Donor</a></li>
	    <li><a href="#">Hospital</a></li>	
		 <li><a href="#">Ambulance</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="doctor_login.php"><span class="glyphicon glyphicon-log-in"></span> Doctors SignUp/Login</a></li>
      </ul>
    </div>
  </div> -->
</nav>




<div class = "con1">

	<h3> <center> Welcome to User Section </center></h3>
		
     </div>
	 
	 
	   
<div class="container text-center">    
  <h3>User  profile</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
	
	<div class="btn-group-vertical">
      <a href="user_profile.php" type="button" class="btn btn-primary">Home </a>
	   <a href="user_update_profile.php" type="button" class="btn btn-primary">Update profile</a>
	   <a href="store_record.php" type="button" class="btn btn-primary">Store Record</a>
	   <a href="user_login.php" type="button" class="btn btn-primary">Log out </a>
	   <br>
	 <a href="#" type="button" class="btn btn-primary">Delete Account</a>
      </div>
    </div>
	
		 	 
 <div class="container">
      <div class="row col-md-9">
      
   
   
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Ashraful Alam</h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="image/doctor.png" class="img-circle img-responsive"> </div>
              

                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>User Name:</td>
                        <td>Mohammad Ashraful Alam</td>
						<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Update
                             </button></td>
						
                      </tr>
                      <tr>
                        <td>Mobile Number</td>
                        <td>01742668528</td> 
						<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Update
                             </button></td>
						
                      </tr>
                      
                       <tr>
                        <td>Email</td>
                        <td>ashraful532sec@gmail.com</td>
						<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Update
                             </button></td>
                      </tr>
                      
                      <tr>
                        <td>Date of Birth</td>
                        <td>25/05/1995</td>
						<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Update
                             </button></td>
                      </tr>
                      
                      <tr>
                        <td>Gender</td>
                        <td>Male</td>
						<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                            Update
                             </button></td>
                      </tr>
					 
                   
                     
                    </tbody>
                  </table>
                  
                 
                </div>
              </div>
            </div>
               
          </div>
        </div>
     
    </div>


     </div>
	 
	 </div>
	 
	
		
		

    
  
	
		<br> <br> <br> <br>
		

<footer class="container-fluid text-center">
  <p>Made by : student</p>
</footer>

</body>
</html>
