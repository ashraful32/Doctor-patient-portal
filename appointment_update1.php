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
 <!--  <title>Doctor Registration form</title> -->
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



table.table-bordered > tbody {
    border:2px solid blue;
}

table.table-bordered > thead {
    border:2px solid blue;
}




table.table-bordered > tbody > th{
    border:1px solid blue;
}


table.table-bordered > thead > tr > th{
    border:1px solid blue;
}

table.table-striped > tbody > tr > th{
    vertical-align: middle;
    text-align: center; 
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
      
   
   
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"><?php  echo $first_name2." ".$last_name2; ?> </h3>
            </div>
            <div class="panel-body">
			  <div class="container col-md-12 col-lg-12 ">

               
                     <?php $m = "abc"; ?>
                       <div class="row">

            
<?php 
         include 'db_config1.php';
        // $conn = mysqli_connect("localhost","root","","store");
         $query2 = "select * from appointment_schedule where doctor_id='$doctor_id'";
	     $run2 = mysqli_query($con,$query2);
	     $k = 1;
	     while($row1 = mysqli_fetch_array($run2)){

          if($k==1)
        {
		 $day_id1 = $row1[0]; 
         $doctor_id1 = $row1[1];
		 $day1 = $row1[2];
		 $time1 = $row1[3];
         $appointment_status1 = $row1[4];
        }
	     if($k==2)
        {
		 $day_id2 = $row1[0]; 
         $doctor_id2 = $row1[1];
		 $day2 = $row1[2];
		 $time2 = $row1[3];
         $appointment_status2 = $row1[4];
        }
       
           if($k==3)
        {
		 $day_id3 = $row1[0]; 
         $doctor_id3 = $row1[1];
		 $day3 = $row1[2];
		 $time3 = $row1[3];
         $appointment_status3 = $row1[4];
        }

           if($k==4)
        {
		 $day_id4 = $row1[0]; 
         $doctor_id4 = $row1[1];
		 $day4 = $row1[2];
		 $time4 = $row1[3];
         $appointment_status4 = $row1[4];
        }


           if($k==5)
        {
		 $day_id5 = $row1[0]; 
         $doctor_id5 = $row1[1];
		 $day5 = $row1[2];
		 $time5 = $row1[3];
         $appointment_status5 = $row1[4];
        }

          if($k==6)
        {
		 $day_id6 = $row1[0]; 
         $doctor_id6 = $row1[1];
		 $day6 = $row1[2];
		 $time6 = $row1[3];
         $appointment_status6 = $row1[4];
        }

          if($k==7)
        {
		 $day_id7 = $row1[0]; 
         $doctor_id7 = $row1[1];
		 $day7 = $row1[2];
		 $time7 = $row1[3];
         $appointment_status7 = $row1[4];
        }

         $k=$k+1;

     }

?>
                          <div class=" col-md-12 col-lg-12 ">
				             <h4><i class="fa fa-map-marker"></i> Chamber </h4>
	                         <p>  <?php echo  $area.', '.$consultation_center.', '.$additional_note;  ?>    <!-- North East Medical College & Hospital,South Surma , Sylhet -->  </p>
				             <br>
				          </div>
						  
                           <div class=" col-md-12 col-lg-12 "> 

               <form class="form-horizontal" role="form" method="POST" name="add" action="appointment_update1.php">
				                <table class="table table-striped" >
	                             

 <caption>
    Doctor Appointment Time Update and Appointment ON/OFF Form
  </caption>
  <col>
  <col>

  <thead>
    <tr align="center" >
      <th scope="col" align="center" style="border-color:#4169E1; text-align:center;">Day</th>
      <th scope="col" align="center" style="border-color:#4169E1; text-align:center;">Time</th>       
      <th scope="col" align="center" style="border-color:#4169E1; text-align:center;">Appointment ON/OFF</th>
      <th scope="col" width="80" align="right" style="border-color:#4169E1; text-align:right;"> Present Appointment Status </th>
    </tr>
  </thead>
  <tbody style="border-color:#808080;" >
    <tr>
      <th>Saturday <input type="hidden"  name="day1" id="day1" value="Saturday"></th>
      <td scope="row"> <input type="text" placeholder="(2:00 - 4:00 PM)" name="time1" id="time1" value="<?php echo $time1;  ?>" style="width:70%; margin-left:50px; "  class="form-control input-sm" autofocus></td>
      <td><select size="1" name="status1" id="status">
          <?php if($appointment_status1=='') 

       {

    ?>
	<option value="ON" label="ON">ON</option>
	<option value="OFF" label="OFF">OFF</option>

     <?php
       }
       else{
           
          if($appointment_status1=='ON')
          {
          ?>
        <option value="ON" label="ON">ON</option>
	    <option value="OFF" label="OFF">OFF</option> 

      <?php
           }
           else{
         ?>
            
        <option value="OFF" label="OFF">OFF</option>
	    <option value="ON" label="ON">ON</option>


       <?php 
 
           }

     }


 ?>
	</select></td>
    <td><?php echo $appointment_status1;  ?></td>
    </tr>
  </tbody>

  <tbody style="border-color:#808080;"  >
    <tr>
      <th> Sunday <input type="hidden"  name="day2" id="day2" value="Sunday"> </th>
      <td scope="row"><input type="text" placeholder="(2:00 - 4:00 PM)" name="time3" id="time3" value="<?php echo $time2;  ?>" style="width:70%; margin-left:50px; "  class="form-control input-sm" autofocus></td>
      <td><select size="1" name="status3" id="status3">
	 <?php if($appointment_status2=='') 

       {

    ?>
	<option value="ON" label="ON">ON</option>
	<option value="OFF" label="OFF">OFF</option>

     <?php
       }
       else{
           
          if($appointment_status2=='ON')
          {
          ?>
        <option value="ON" label="ON">ON</option>
	    <option value="OFF" label="OFF">OFF</option> 

      <?php
           }
           else{
         ?>
            
        <option value="OFF" label="OFF">OFF</option>
	    <option value="ON" label="ON">ON</option>


       <?php 
 
           }

     }


 ?>
	</select> </td>
     <td><?php echo $appointment_status2;  ?></td> 
    </tr>
  </tbody>

   <tbody style="border-color:#808080;"  >
    <tr>
      <th>Monday  <input type="hidden"  name="day3" id="day3" value="Monday"> </th>
      <td scope="row"> <input type="text" placeholder="(2:00 - 4:00 PM)" name="time5" id="time5" value="<?php echo $time3;  ?>" style="width:70%; margin-left:50px; "  class="form-control input-sm" autofocus> </td>
      <td><select size="1" name="status5" id="status5">
	 <?php if($appointment_status3=='') 

       {

    ?>
	<option value="ON" label="ON">ON</option>
	<option value="OFF" label="OFF">OFF</option>

     <?php
       }
       else{
           
          if($appointment_status3=='ON')
          {
          ?>
        <option value="ON" label="ON">ON</option>
	    <option value="OFF" label="OFF">OFF</option> 

      <?php
           }
           else{
         ?>
            
        <option value="OFF" label="OFF">OFF</option>
	    <option value="ON" label="ON">ON</option>


       <?php 
 
           }

     }


 ?>
	</select></td>
     <td><?php echo $appointment_status3;  ?></td>
    </tr>
  </tbody>


    <tbody style="border-color:#808080;" >
    <tr>
      <th>Tuesday  <input type="hidden"  name="day4" id="day4" value="Tuesday"> </th>
      <td> <input type="text" placeholder="(2:00 - 4:00 PM)" name="time7" id="time7" value="<?php echo $time4;  ?>" style="width:70%; margin-left:50px; "  class="form-control input-sm" autofocus> </td>
      <td><select size="1" name="status7" id="status7">
	 <?php if($appointment_status4=='') 

       {

    ?>
	<option value="ON" label="ON">ON</option>
	<option value="OFF" label="OFF">OFF</option>

     <?php
       }
       else{
           
          if($appointment_status4=='ON')
          {
          ?>
        <option value="ON" label="ON">ON</option>
	    <option value="OFF" label="OFF">OFF</option> 

      <?php
           }
           else{
         ?>
            
        <option value="OFF" label="OFF">OFF</option>
	    <option value="ON" label="ON">ON</option>


       <?php 
 
           }

     }


 ?>
	</select></td>
    <td><?php echo $appointment_status4;  ?></td>  
    </tr>
  </tbody>


      <tbody style="border-color:#808080;">
    <tr>
      <th>Wednesday <input type="hidden"  name="day5" id="day5" value="Wednesday"> </th>
      <td> <input type="text" placeholder="(2:00 - 4:00 PM)" name="time9" id="time9" value="<?php echo $time5;  ?>" style="width:70%; margin-left:50px; "  class="form-control input-sm" autofocus> </td>
      <td><select size="1" name="status9" id="status9">
	 <?php if($appointment_status5=='') 

       {

    ?>
	<option value="ON" label="ON">ON</option>
	<option value="OFF" label="OFF">OFF</option>

     <?php
       }
       else{
           
          if($appointment_status5=='ON')
          {
          ?>
        <option value="ON" label="ON">ON</option>
	    <option value="OFF" label="OFF">OFF</option> 

      <?php
           }
           else{
         ?>
            
        <option value="OFF" label="OFF">OFF</option>
	    <option value="ON" label="ON">ON</option>


       <?php 
 
           }

     }


 ?>
	</select></td>   
    <td><?php echo $appointment_status5;  ?></td>
    </tr>
  </tbody>



  <tbody style="border-color:#808080;">
    <tr>
      <th>Thursday <input type="hidden"  name="day6" id="day6" value="Thursday"> </th>
      <td>  <input type="text" placeholder="(2:00 - 4:00 PM)" name="time11" id="time11" value="<?php echo $time6;  ?>" style="width:70%; margin-left:50px; "  class="form-control input-sm" autofocus> </td>
      <td><select size="1" name="status11" id="status11">
	   <?php if($appointment_status6=='') 

       {

    ?>
	<option value="ON" label="ON">ON</option>
	<option value="OFF" label="OFF">OFF</option>

     <?php
       }
       else{
           
          if($appointment_status6=='ON')
          {
          ?>
        <option value="ON" label="ON">ON</option>
	    <option value="OFF" label="OFF">OFF</option> 

      <?php
           }
           else{
         ?>
            
        <option value="OFF" label="OFF">OFF</option>
	    <option value="ON" label="ON">ON</option>


       <?php 
 
           }

     }


 ?>
	</select></td>
    <td><?php echo $appointment_status6;  ?></td>  
    </tr>
    
  </tbody>


     
   <tbody style="border-color:#808080;">
    <tr>
      <th>Friday <input type="hidden"  name="day7" id="day7" value="Friday"> </th>
      <td> <input type="text" placeholder="(2:00 - 4:00 PM)" name="time13" id="time13" value="<?php echo $time7;  ?>" style="width:70%; margin-left:50px; "  class="form-control input-sm" autofocus> </td>
      <td><select size="1" name="status13" id="status13">
      <?php if($appointment_status7=='') 

       {

    ?>
	<option value="ON" label="ON">ON</option>
	<option value="OFF" label="OFF">OFF</option>

     <?php
       }
       else{
           
          if($appointment_status7=='ON')
          {
          ?>
        <option value="ON" label="ON">ON</option>
	    <option value="OFF" label="OFF">OFF</option> 

      <?php
           }
           else{
         ?>
            
        <option value="OFF" label="OFF">OFF</option>
	    <option value="ON" label="ON">ON</option>


       <?php 
 
           }

     }


 ?>
	</select></td> 
    <td><?php echo $appointment_status7;  ?></td>
    </tr>
  </tbody>


              

                                 </table>

                                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                     
                            <input type="submit"  name="submit" value="Update" class="btn btn-primary btn-block">
						<!--  <a href="doctor_chamber.php" class="btn btn-primary btn-block">Update</a>  -->
                    </div>
                </div>
                    </form>
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

         $day1 = test_input($_POST["day1"]);
         $time1 = test_input($_POST["time1"]);
         $status1 = test_input($_POST["status1"]);
        
          $day2 = test_input($_POST["day2"]);
         $time3 = test_input($_POST["time3"]);
         $status3 = test_input($_POST["status3"]);
       
     
           $day3 = test_input($_POST["day3"]);
         $time5 = test_input($_POST["time5"]);
         $status5 = test_input($_POST["status5"]);
      

         $day4 = test_input($_POST["day4"]);
         $time7 = test_input($_POST["time7"]);
         $status7 = test_input($_POST["status7"]);
        

         $day5 = test_input($_POST["day5"]);
         $time9 = test_input($_POST["time9"]);
         $status9 = test_input($_POST["status9"]);
       

          $day6 = test_input($_POST["day6"]);
         $time11 = test_input($_POST["time11"]);
         $status11 = test_input($_POST["status11"]);
      


         $day7 = test_input($_POST["day7"]);
         $time13 = test_input($_POST["time13"]);
         $status13 = test_input($_POST["status13"]);
        


     }


        	if(empty($_POST["submit"]))
	       {
	         	$sub = "";
	       }else{ 
                    include 'db_config1.php';
                  //  $con = mysqli_connect("localhost","root","","store");

                    if($con->connect_error){
		            die("Connection failed: " . $conn->connect_error);
		          } 
				  
               $sql = "update appointment_schedule set time='$time1',appointment_status='$status1' where doctor_id='$doctor_id' and day='Sat';";
                 
               $sql .="update appointment_schedule set time='$time3',appointment_status='$status3' where doctor_id='$doctor_id' and day='Sun';";
               $sql .="update appointment_schedule set time='$time5',appointment_status='$status5' where doctor_id='$doctor_id' and day='Mon';";
               $sql .="update appointment_schedule set time='$time7',appointment_status='$status7' where doctor_id='$doctor_id' and day='Tue';";
               $sql .="update appointment_schedule set time='$time9',appointment_status='$status9' where doctor_id='$doctor_id' and day='Wed';";
               $sql .="update appointment_schedule set time='$time11',appointment_status='$status11' where doctor_id='$doctor_id' and day='Thu';";
                $sql .="update appointment_schedule set time='$time13',appointment_status='$status13' where doctor_id='$doctor_id' and day='Fri';";
                 
               if($con->multi_query($sql) === TRUE) {
                             // update_database("store");
                           sleep(1);
		            echo "<script>window.open('appointment_schedule1.php','_self')</script>"; 
		          } else {
			      echo "Error: " . $sql . "<br>" . $conn->error;
					 
				  }		



                      
	      }



?>

</body>
</html>
