<?php
session_start();
if(!($_SESSION['email'])){
	header("location: doctor_registration.php");
}
else{
	$email = $_SESSION['email'];
} 
?>
 <!DOCTYPE html>
<html lang="en">
<head>
  
  <?php include 'title/website_title.php';?>
 <!--   <title>Doctor Registration form</title> -->
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
   
 div.chamber{
	
	 color: rgb(0, 0, 255); 
 }
 
 div.consultation_fee{
	  color: rgb(0, 0, 255); 
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

	<h3> <center>Welcome to Doctor's Area </center></h3>
		
     </div>
	 
	 

<div class="container text-center">    
  <h3>Doctors profile</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
	
	  <div class="btn-group-vertical">

      <?php include 'doctor_account_sidebar/menu.php';?>
    <!--
      <a href="doctor_profile.php" type="button" class="btn btn-primary">Home </a>
	   <a href="appointment_list.php" type="button" class="btn btn-primary">Appointment List </a>
	    <a href="doctor_logout.php" type="button" class="btn btn-primary">Log out </a>
		<br>
	    <a href="doctor_update_profile.php" type="button" class="btn btn-primary">Update profile</a>
          <a href="doctor_chamber_info.php" type="button" class="btn btn-primary">Chamber Info</a>
         <a href="doctor_chamber_update.php" type="button" class="btn btn-primary">Chamber Update</a>
	     <a href="doctor_hide_profile.php" type="button" class="btn btn-primary">Hide profile</a>
		  <a href="appointment_on.php" type="button" class="btn btn-primary">Appointment ON/Off</a>
            <a href="doctor_change_pwd.php" type="button" class="btn btn-primary">Change Password</a>
		   <a href="receptionist.php" type="button" class="btn btn-primary">Doctor Receptionist</a>
		<a href="#" type="button" class="btn btn-primary">Delete Account</a> -->


      </div>

    </div>
	
		 	 
 <div class="container col-sm-9">
      <div class="row col-sm-12">
 
   <?php 
       include 'db_config1.php';
     //$con = mysqli_connect("localhost","root","","store");

       $doctor_id= $first_name2 = $last_name2 = "";
 
     $query = "select * from doctor where email='$email'";

       $run = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($run)){
		  
         $doctor_id = $row[0];
		 $first_name2 = $row[1];
		 $last_name2 = $row[2];
        }

   ?>
   
   
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"> <?php  echo $first_name2." ".$last_name2; ?> <!-- Dr. Touhidual Islam Imdad --></h3>
            </div>
            <div class="panel-body">
			
			 <div class = "search2">
	 <form method = "post" role="form" name="appointment_search" action = "appointment_list.php">
		<div class="abc">
		    Date
        <input type="date" id="appointment_date" name="appointment_date" class="input-sm" > 
	<!-- <select size="1" name="department">   class="form-control input-sm"
	<option value="" label="">- - - - -</option>
	<option value="Saturday" label="Saturday">Saturday</option>
	<option value="Sunday" label="Sunday">Sunday</option>
	<option value="Monday" label="Monday">Monday</option>
	<option value="Tuesday" label="Tuesday">Tuesday</option>
	<option value="Wednesday" label="Wednesday">Wednesday</option>
	<option value="Thursday" label="Thursday">Thursday</option>
	<option value="Friday" label="Friday">Friday</option>
	</select> -->
	 <input type='submit' name = 'submit' value = 'search'> <br> 
		</div>  
		</form> 
		</div>
	
	

                <div class=" col-md-11 col-lg-11 "> 
				<table  class="table table-bordered">
  


    <thead>
      <tr>
        <th>Appointment No.</th>
        <th>Date</th>
        <th>Day</th>
		<th>Patient Name</th>
		<th>Mobile Number</th>
      </tr>
    </thead>
    <tbody>
  <?php 

      function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;	 
     }



   if($_SERVER["REQUEST_METHOD"]=="POST"){

        $appointment_date = test_input($_POST["appointment_date"]);
     
     }





       if(empty($_POST["submit"]))
	       {
	         	$sub = "";
	       }else{   
     
     $query1 = "select * from appointment where doctor_id='$doctor_id' and date='$appointment_date'";
     
       $count = 0;

       $run1 = mysqli_query($con,$query1);
      
       $k = mysqli_num_rows($run1);
       // echo $k;
  
       while($row1 = mysqli_fetch_array($run1)){
		  
         $appointment_id = $row1[0];
		 $doctor_id = $row1[1];
		 $chamber_id = $row1[2];
         $date = $row1[3];
         $day = $row1[4];
         $patient_name = $row1[5];
         $mobile_no = $row1[6];
         $patient_type = $row1[7];
        
        $count = $count+1;
   ?>
      <tr>
        <td><?php echo $count; ?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $day; ?></td>
		<td><?php echo $patient_name; ?></td>
		<td><?php echo $mobile_no; ?></td>
      </tr>
<?php
   } }
 ?>
   <!--   <tr>
        <td>2</td>
        <td>13-2-2017</td>
        <td>Saturday</td>
		<td>Sadik Ahmed abcd</td>
		<td>01744336789</td>
      </tr>
      <tr>
        <td>3</td>
        <td>13-2-2017</td>
        <td>Saturday</td>
		<td>Sadik Ahmed monopsdfsdf </td>
		<td>01744336789</td>
      </tr> -->
    </tbody>
  </table>
                <!--  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Doctor Name:</td>
                        <td>Dr. Touhidual Islam Imdad</td>
						
                      </tr>
                      <tr>
                        <td>Professional Title</td>
                        <td>Assistant.Professor Department of Dermatology</td> 
						
                      </tr>
                      
                       <tr>
                        <td>Specialist in</td>
                        <td>Dermatology(Skin, Venereology, Sexual, Hair, Allergy)</td>
                      </tr>
                      
                      <tr>
                        <td>Chambers</td>
                        <td>37, Stadium Market, Sadar, Sylhet</td>
                      </tr>
                      
                      <tr>
                        <td>Degree</td>
                        <td>MBBS, DDV</td>
                      </tr>
                   
                       <tr>
                        <td>Description(Professional Statement)</td>
                        <td>Working Five Year on Dermatology , Square Hospital</td>
                       </tr>
                       
                        <tr>
                        <td>District</td>
                        <td>Sylhet</td>
                       </tr>
                       
                       <tr>
                        <td>Gender :</td>
                        <td>Male</td>
                      </tr>
                       
                      <tr>
                        <td>New Patient Fee</td>
                        <td>600</td>
                      </tr>
					  
					  <tr>
                        <td>Returning Patient Fee</td>
                        <td>300</td>
                      </tr>
                   
                     
                    </tbody>
                  </table>
                  -->
                 
                </div>
              </div>
            </div>
               
        
     
    </div>


     </div>
	 
	 </div>
	 

	
<footer class="container-fluid text-center">
  <p>Made by : student</p>
</footer>

</body>
</html>