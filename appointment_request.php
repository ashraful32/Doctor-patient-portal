<?php
$enter=0;
  if((!empty($_GET["doctor_id"])) && (!empty($_GET["chamber_id"])))
 {
  $doctor_id = $_GET['doctor_id'];
  $day = $_GET['day'];
  $chamber_id = $_GET['chamber_id'];
   $date = $_GET['date'];
  }
else{
  $enter=1;
}
  //  echo $doctor_id;
  // echo $day;
  // echo  $chamber_id;
  // echo  $date; 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>

  <?php include 'title/website_title.php';?>
 <!--  <title>Doctor Registration form</title> -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
     <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script type="text/javascript" >
       
$.validator.setDefaults({
 errorPlacement: function (error, element) {
      if (element.prop('type') === 'radio') {
        error.insertAfter(element.parent().parent().parent());
      } else {
        error.insertAfter(element);
      }
    }
  });






      			
		$(document).ready(function(){
		$("form[name=appointment]").validate({
         
			rules:{
				
				mobile_number:{
					required: true,
					number: true,
					minlength: 11,
				   	maxlength: 14
                    },

				patient_name:{
					required: true,
					minlength: 3
				},
                
               visit:{
					required: true
				},

				
				
                							
			},
			messages:{

               	mobile_number:{
					required: "Mobile Number is Required.",
					number: "Only Number is allowed",
					minlength: "Mobile Number Minimum 11 digit.",
					maxlength: "Mobile Number Maximum 14 digit."
					
				},

				
				patient_name:{
					required: "Name is required",
					minlength: "Name minimum 3 character"
				},



                 visit:{
					required: "Doctor Visited or not visited is Required"
				},


			


				
			},
			
			
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
   
   div.container{
   margin-top: 100px;
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
  </div> -->
</nav>




       <div class = "con1">
	          <h3> <center>Welcome to Doctor appointment section </center></h3>	
        </div>

<?php

    	   
               $first_name = $last_name = $title = $specialty = $chamber_district = $area = $consultation_center = $additional_note = $new_fee = "";	         

       if($enter==0){
          include 'db_config1.php';
       //  $connect = mysqli_connect("localhost", "root", "", "store");  

         $search_result = "SELECT doctor.* , chamber.*  FROM chamber             
                       INNER JOIN doctor ON doctor.doctor_id = chamber.doctor_id 
                       where doctor.doctor_id='$doctor_id'";  

             //$search_result= "select * from doctor where doctor_id ='$doctor_id'";
           //echo $search_result;

           /*   $search_result= "select * from chamber where doctor_id ='$doctor_id'";
           echo $search_result; */

              $result = mysqli_query($con, $search_result);  

            $total_records = mysqli_num_rows($result);
          // echo $total_records;
          // echo "abcd";

                while($row = mysqli_fetch_array($result))  
            {  
                 $doctor_id = $row[0];
                 $first_name = $row[1];
		         $last_name = $row[2];
		         $title = $row[3];
                 $specialty = $row[4];
                 $gender = $row[5];
                 $picture = $row[6];
                 $mobile_number = $row[7];
                 $description = $row[13];
                 $degree = $row[14];
                 $profile_view = $row[16];
                 $chamber_id = $row[17];
                 $chamber_district = $row[19];
                 $area = $row[20];
                 $consultation_center = $row[21];
                 $additional_note = $row[22];
                 $new_fee = $row[23];
                 $report_fee = $row[25]; 
                } 

             $query1 = "Select * from appointment_schedule where doctor_id='$doctor_id' and day='$day'";     
             $result1 = mysqli_query($con, $query1);  

             while($row = mysqli_fetch_array($result1))  
               {  
                  $day_id = $row[0];
                  $doctor_id = $row[1];
		          $day = $row[2];
                  $time = $row[3];
                  $appointment_status = $row[4];                                                                
              }

}
  
?>
	 
	   <div class="container">
                   <div class="row">
		                <div class="col-lg-3 col-sm-3">
		                    </div>
		                        <div class="col-lg-6 col-sm-6">
		                              <div class="row">
		                                     <div class="col-lg-12 col-sm-12">
		                                            <h4 class="text-info"> <b> Request for Appointment: </b></h4>
		                                             <hr style="margin: 10px 0px 10px 0px !important;">
		                                            <p> <b> <!-- Prof. Dr. Mohammed Afzal Miah --> <?php echo $first_name.' '.$last_name;   ?> </b> </p>
		                                             <p class="doc_designation">  <b> <!-- Professor, Dept. of Medicine, North East Medical College, Sylhet --> <?php echo $title; ?>  </b> </p>
		                                             <hr style="margin: 10px 0px 10px 0px !important;">
													 <h5 class="doc_office"></h5>
		                                             <h5> <b> <!--   North East Medical College &amp; Hospital,South Surma , Sylhet --> <?php echo $area.' , '.$consultation_center.' , '.$additional_note;  ?> </b> </h5>
		                                             <p></p>
		                                             <hr style="margin: 10px 0px 10px 0px !important;">

											            <div class="panel panel-primary">
    	
			                                                 <div class="panel-heading">Request for Appointment</div>
			                                                     <div class="panel-body">
            
                                                                      <!-- <fieldset class="col-md-6">    	
					                                                      <legend>Fieldset Title</legend> -->
					
					                                                     <div class="panel panel-default">
						                                                     <div class="panel-body">
							                                                     <form class="form-horizontal confirmation_form" role="form"  method="POST" name="appointment" action="appointment_request.php">
		                                          
		                                                                                 <div class="form-group">
												                                             <label for="" class="col-sm-8 control-label">Have you visited this doctor before?</label>
		                                                                                    <div class="col-sm-4">
		                                                                                       <label class="radio-inline"><input class="visit" name="visit" id="visit" value="y" type="radio"> Yes</label>
		                                                                                       <label class="radio-inline"><input name="visit" id="visit" class="visit" value="n" checked="checked" type="radio"> No</label>
		                                                                                    </div>
		                                                                                </div>
												 
		                                          <div class="form-group">
		                                                    <label for="" class="col-sm-6 control-label">Mobile Number :</label>
		                                                  <div class="col-sm-6 relative_pos">
														       <div class="input-group">
															   
		                                                            <input type="text" id="mobile_number" name="mobile_number" placeholder="+8801xxxxxxxxx" class="form-control input-sm">

		                                                      </div>
		                                                  </div>
		                                           </div>
												   
												   <div class="form-group">
		                                                    <label for="patient_name" class="col-sm-6 control-label">Patient Name :</label>
		                                                  <div class="col-sm-6 relative_pos">
														       <div class="input-group">
															   
		                                                            <input type="text" id="patient_name" name="patient_name" placeholder="Patient Name" class="form-control input-sm">

		                                                      </div>
		                                                  </div>
		                                           </div>
												   
		                                                       <input name="doctor_id" class="doctor_id"  id="doctor_id"  value="<?php echo $doctor_id; ?>"  type="hidden">
		                                                        <input name="chamber_id" class="chamber_id" id="chamber_id"  value="<?php echo $chamber_id; ?>"  type="hidden">
                                                               <input name="date" class="date" id="date"  value="<?php echo $date; ?>"  type="hidden">
                                                                 <input name="day" class="day" id="day"  value="<?php echo $day; ?>"  type="hidden">
                                                               
		                                           <div class="form-group"><label for="" class="col-sm-3 control-label">&nbsp;</label>
		                                                 <div class="col-sm-9">
		                                                   <!--    <a href="appointment_sucess.php" id="submit_book" class="btn btn-success btn-sm pull-right">Request Appointment</a> -->
                                                               <input type="submit"  name="submit" value="Request Appointment" class="btn btn-success btn-sm pull-right">
		                                                 </div>
		                                           </div>
												   
		                                        
		                                        </form>
						                                                      </div>
					                                                     </div>
					
				                                                    <!--   </fieldset>		-->		
				
				                                                         <div class="clearfix"></div>
                                                                 </div>
                
                                                        </div>
														
		                                 </div>
		                             </div>
		                       </div>
							   
							   
							   
		                                            <div class="col-lg-3 col-sm-3">
												
		                                             </div>
													 
		                                              <div>
                                                      </div>
													  
	                     </div>
		          </div>
	  
		<br> <br> <br> <br>
		

<footer class="container-fluid text-center">
  <p>Made by : student</p>
</footer>

</body>
</html>


<?php 


    function test_input($data){
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;	 
     }



   if($_SERVER["REQUEST_METHOD"]=="POST"){

        $mobile_number = test_input($_POST["mobile_number"]);
        $patient_name = test_input($_POST["patient_name"]);
        $visit = test_input($_POST["visit"]);
        $doctor_id = test_input($_POST["doctor_id"]);
        $chamber_id = test_input($_POST["chamber_id"]);
        $date = test_input($_POST["date"]);
        $day = test_input($_POST["day"]);

     }


 
  	if(empty($_POST["submit"]))
	{
		$sub = "";
	}else{    
          
          include 'db_config1.php';
         	/* $servername = "localhost";
		    $username = "root";
		    $password_db = "";
		    $dbname = "store";
			
			$conn = new mysqli($servername, $username, $password_db, $dbname); */
			
				if($con->connect_error){
		            die("Connection failed: " . $con->connect_error);
		          } 
			 
			  $sql = "insert into appointment(doctor_id,chamber_id,date,day,patient_name,mobile_no,patient_type) values ( '$doctor_id', '$chamber_id', '$date', '$day', '$patient_name' , '$mobile_number' ,'$visit');";

             	 if ($con->multi_query($sql) === TRUE) {
		           /* echo "New records created successfully";
                    echo $password;
                     
                     echo "abcd=";
                     echo $confirm_password;
                  
                      echo $sql; */

		            echo "<script>window.open('appointment_sucess.php','_self')</script>"; 
		          } else {
			      echo "Error: " . $sql . "<br>" . $conn->error;
					 
				  }		
 
  }


?>
