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
 <!-- <title>Doctor Registration form</title> -->
 <?php include 'title/website_title.php';?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
      <script type="text/javascript">
     			
		$(document).ready(function(){
	
         
         $(document).on('click', '#abc1', function(){ 
            var day1 = $('#day1').val();
            var  date1 = $('#date1').val(); 
            var  time1 = $('#time1').val();     

               /*  console.log("time1="+day1);  
                console.log("day="+date1); 
                console.log("date="+time1);  */

                   $.ajax({  
                url:"test8.php",  
                method:"POST",  
                data:{ day1:day1,date1:date1,time1:time1 },  
                success:function(data){  
                     $('.con1').html(data); 
                     
                }  
           }) 

   
      });  


                $(document).on('click', '#abc2', function(){ 
            var day1 = $('#day2').val();
            var  date1 = $('#date2').val(); 
            var  time1 = $('#time2').val();     

               /*  console.log("time1="+day1);  
                console.log("day="+date1); 
                console.log("date="+time1);  */

                   $.ajax({  
                url:"test8.php",  
                method:"POST",  
                data:{ day1:day1,date1:date1,time1:time1 },  
                success:function(data){  
                     $('.con1').html(data); 
                     
                }  
           }) 

   
      });  




	});
  
   </script>

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
   
 

.error{
	 color: red;
     
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
  </div>-->
</nav>



<div class = "con1">

	<h3> <center>Welcome to Doctor's Area </center></h3>
		
     </div>
	 
	 
<?php

// $con = mysqli_connect("localhost","root","","store");

 include 'db_config1.php';
         
         $first_name2 = $last_name2 = $title2 = $specialty2 = $gender2 =  $picture2 = $mobile_number2 = $email2 = "";
          $password2 = $bmdc_no2 = $date_of_birth2 = $district2 = $description2 = $degrees2 ="";
       
         $query = "select * from doctor where email='$email'";
          
	     $run = mysqli_query($con,$query);
	 
	 while($row = mysqli_fetch_array($run)){
		  
         $doctor_id = $row[0];
		 $first_name2 = $row[1];
		 $last_name2 = $row[2];
         $title2 = $row[3];
         $specialty2 = $row[4];
         $gender2 = $row[5];
         $picture2 = $row[6];
		 $mobile_no2 = $row[7];
		 $email2 = $row[8];
         $password2 = $row[9];
         $bmdc_no2 = $row[10];
		 $date_of_birth2 = $row[11];
		 $district2 = $row[12];
         $description2 = $row[13];
         $degrees2 =  $row[14];

        }
      $con->close();
        

?>

<?php 
         include 'db_config1.php';
      // $conn = mysqli_connect("localhost","root","","store");
        $chamber_id = $district = $area =  $consultation_center = $additional_note =  $new_patient =  $return_patient =  $report = "";   


           $query1 = "select * from chamber where doctor_id='$doctor_id'";
          
	     $run1 = mysqli_query($con,$query1);
	 
	     while($row1 = mysqli_fetch_array($run1)){
		 $chamber_id = $row1[0]; 
         // $doctor_id1 = $row1[1]; 
         $district = $row1[2];
		 $area = $row1[3];
		 $consultation_center = $row1[4];
         $additional_note = $row1[5];
         $new_patient = $row1[6];
         $return_patient = $row1[7];
         $report = $row1[8];
		 
        }
        $con->close();

?>



<div class="container text-center">    
  <h3>Doctors profile</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
	
	<div class="btn-group-vertical">
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
		<a href="#" type="button" class="btn btn-primary">Delete Account</a>
      </div>
    </div>
	
		 	 
 <div class="container col-sm-9">
      <div class="row col-sm-12">
      
   
   
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><?php  echo $first_name2." ".$last_name2; ?> </h3>
            </div>
            <div class="panel-body">
			  <div class="container col-md-11 col-lg-11 ">

               
                     <?php $m = "abc"; ?>
                       <div class="row">
                          <div class=" col-md-12 col-lg-12 ">
				             <h4><i class="fa fa-map-marker"></i> Chamber </h4>
	                         <p>  North East Medical College & Hospital,South Surma , Sylhet </p>
				             <br>
				          </div>
						  
                           <div class=" col-md-12 col-lg-12 "> 
				                <table class="table ">
	                                <thead>
                                       <tr align = 'center';>
                                            <th  style="border-color:#4169E1;">Day</th>
                                            <th  style="border-color:#4169E1;">Date</th>
                                            <th  style="border-color:#4169E1;">Time</th>
		                                    <th  style="border-color:#4169E1;">Appointment</th>
                                       </tr>
                                   </thead>
                                         
                                      <!--     -->
	                     
                                    <tbody>
                                       <tr>
                                           <td>Sat  <input type="hidden" name="day1" id="day1" value="Sat"> </td>
                                           <td>12-3-18  <input type="hidden" name="date1" id="date1" value="12-3-18"> </td>
                                           <td> <input type="text" name="time1" id="time1" value=""></td>
                                           <td><input type="button" name="abc1" id="abc1" value = "Add" ></td>
                                       </tr>

                                        <tr>
                                           <td>Sun  <input type="hidden" name="day2" id="day2" value="Sun"> </td>
                                           <td>12-4-18 <input type="hidden" name="date2" id="date2" value="18-4-12"> </td>
                                           <td><input type="text" name="time2" id="time2" value=""></td>
                                           <td><input type="button" name="abc2" id="abc2" value = "Add" ></td>
                                       </tr>
                                        
                                        <tr>
                                           <td>Sat </td>
                                           <td>12-3-18 </td>
                                           <td>(2.00-4.30PM)</td>
                                           <td>(6.00-8.30PM)</td>
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
	 
	 </div>
	 

	
<footer class="container-fluid text-center">
  <p>Made by : student</p>
</footer>


<?php


  
  	    $district4 = $area4 = $consultation_center4 = $additional_note4 =  $new_patient4 =  $return_patient4 =  $report4 =  $password4= ""; 

   function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;	 
     }



        if($_SERVER["REQUEST_METHOD"]=="POST"){

         $district4 = test_input($_POST["district"]);
        $area4 = test_input($_POST["area"]);
        $consultation_center4 = test_input($_POST["consultation_center"]);
        $additional_note4 = test_input($_POST["additional_note"]);
        $new_patient4 = test_input($_POST["new_patient"]);
        $return_patient4 = test_input($_POST["return_patient"]);
        $report4 = test_input($_POST["report"]);
        $password4 = test_input($_POST["password"]);
        
     }

       // echo $password;

        	if(empty($_POST["submit"]))
	       {
	         	$sub = "";
	       }else{ 

                   // $con = mysqli_connect("localhost","root","","store");
                     include 'db_config1.php';

                    if($con->connect_error){
		                    die("Connection failed: " . $con->connect_error);
		             }else{          
	               
                                // $sql2 = "select * from chamber where email='$email' and password = '$password4'";
                                     $sql2 = "select * from chamber inner JOIN doctor ON chamber.doctor_id = doctor.doctor_id  where email='$email' and password = '$password4'";
                                 echo $sql2;
                                $run = mysqli_query($con,$sql2);
                               if( mysqli_num_rows($run)> 0){
                                   $sql = "update chamber set chamber_district ='$district4',  area='$area4', consultation_center='$consultation_center4' , additional_note ='$additional_note4', new_fee='$new_patient4' , returning_fee ='$return_patient4' , report_fee= '$report4' where doctor_id='$doctor_id' ";

	                              // echo $sql;
                                    // echo "<br>";
	
                                      if(mysqli_query($con, $sql)){
                                      // echo "Records were updated successfully.";
                                        echo "<script>window.open('doctor_chamber_info.php','_self')</script>";
                                    } else {
                                         echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
                                      }

                                      mysqli_close($con);
                                } else{

                                      echo "<script>alert('password is incorrect.')</script>";
                                   }
	
                             }          
				  
	            }



?>

</body>
</html>
