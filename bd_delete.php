<?php
session_start();
if(!($_SESSION['bd_email'])){
	header("location: blood_donor_login.php");
}
else{
	$email = $_SESSION['bd_email'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <!--  <title>WebSiteName</title> -->
<?php include 'title/website_title.php';?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
   <!--  <script src="jquery/jquery-3.3.1.min.js"></script>  -->
 <!-- <script src="jquery/jquery-3.3.1.js"></script> -->
 <script> 				
					
		/*$(document).ready(function(){

        $('input#bds_submit').on('click',function(){
           
            
             //  var val2 = $("select[name=profile_view]").val();
              var val2 = $("#profile_view").val();
                //alert(val2);

              $.ajax({
            url: "bd_hide_check.php",
            method: "POST",
            data:{profile_view: val2},
            dataType: "text",
            success:the_function,

          });


               function the_function(data){
                    //$data1 = data;
                   console.log(data);
                $('#test').html(data);         
           }
	});
     });*/


          $(document).ready(function(){

        $('button#show1').on('click',function(){
          // $( "#about" ).className = 'unhidden' ;
          // $( "#about" ).show();
          //$('#about').is(':visible');
           $('#about').css('display','none').removeClass('hidden').show();

             console.log("abcd");
           // alert(ok);
	  });

             $('button#no1').on('click',function(){
             
               window.location.href='blood_donor_profile.php';
	     });



              $("form[name=bd_delete]").validate({
         
			rules:{
				
                email:{
					required:true,
					email:true

				},
				
				password:{
					required: true,
					minlength: 5
				},
				    		
			},

			messages:{
 
                  email:{
					required: " Email Address is required"
				},


				password:{
					required: "Password is required",
					minlength: "Password minimum 5 character"
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
   margin-left: 100px;
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
   
 div.content4{

   margin-left: 150px;
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

	<h3> <center>Welcome to Blood Donor section </center></h3>
		
     </div>
	 
	 <?php
        include 'db_config1.php';
         // $con = mysqli_connect("localhost","root","","store");

            $query = "select * from blood_donor where email='".$_SESSION['bd_email']."' ";
       
	 $run = mysqli_query($con,$query);
	 
	 while($row = mysqli_fetch_array($run)){
		 
		 $first_name = $row[1];
		 $last_name = $row[2];
		 $mobile_number = $row[3];
		 $email = $row[4];
         $password = $row[5];
		 $birthDate = $row[6];
		 $district = $row[7];
         $address = $row[8];
         $gender = $row[9];
	     $blood_group = $row[10];
         $picture = $row[11];
         $profile_view = $row[12];
}
          mysqli_close($con);
	?>
	   
<div class="container text-center">    
  <h3>Blood donors profile</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
	
	<div class="btn-group-vertical">
       <a href="blood_donor_profile.php" type="button" class="btn btn-primary">Home </a>
	   <a href="bd_update_profile.php" type="button" class="btn btn-primary">Update profile</a>
	   <a href="bd_hide_profile.php" type="button" class="btn btn-primary">Hide profile</a>  
       <a href="bd_change_pwd.php" type="button" class="btn btn-primary">Change Password</a>
	   <a href="blood_donor_logout.php" type="button" class="btn btn-primary">Log out </a>
	   <br>
	 <a href="bd_delete.php" type="button" class="btn btn-primary">Delete Account</a>
      </div>
    </div>
	
		 	 
 <div class="container">
      <div class="row col-md-9">
      
   
   
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title"> <?php echo $first_name." ".$last_name; ?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
              
              

                <div class=" col-md-11 col-lg-11 "> 
				     
					<p style="color: red"> <strong> Are you sure you want to delete your account ? </strong> </p>
                     
					  <button id="show1">Yes</button>
                      <button id="no1">No</button>
                     <!--  <a id="no1"  type="button" href="blood_donor_profile.php" >No</a> -->
                     <!--  <a href="blood_donor_profile.php" type="button" class="btn btn-default">No</a> -->
                            <br>
                             <br>
                           
                            <div id="about"  class="hidden">
                                <div class="content3">
                                  <p> <center>If you want to delete your account enter your email address and password ,then click delete button </center></p>
                                  <p> <center>If you do not want to delete your account Please click No button above. </center></p>
                                   
                              </div>
                                 <br>
                          <div class="content4">
                               
                              <form class="form-horizontal" method="POST" name="bd_delete" action="bd_delete.php">
                            <div class="form-group">
                                 <label class="control-label col-sm-2" for="email">Email:</label>
                                  <div class="col-sm-8">
                                   <input type="email" class="form-control" id="email" placeholder="Email address" name="email">
                                  </div>
                             </div>
                             <div class="form-group">
                               <label class="control-label col-sm-2" for="pwd">Password:</label>
                                   <div class="col-sm-8">          
                                      <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                    </div>
                             </div>
                           
                           <div class="form-group">        
                                  <div class="col-sm-offset-2 col-sm-8">
                                  <!-- <button type="submit" class="btn btn-red">Delete</button> -->
                                  <!-- <button type="submit" class="btn  btn-warning">Delete</button> -->
                                   <input type="submit"  name="submit" value="Delete" class="btn btn-warning">
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
	 
	 </div>
	 
	

<?php
     include 'db_config1.php';
//$con = mysqli_connect("localhost","root","","store");


                   if($con->connect_error){
		            die("Connection failed: " . $con->connect_error);
		          }else{


if(isset($_POST['submit'])){


    $user_email = $_POST['email'];
	$user_password = $_POST['password'];
   
      

	if( $user_email ==''){
		echo "<script> alert('Please Enter your Email Address.')</script>";
		exit();
	}
	
	if($user_password==''){
		echo "<script> alert('Please Enter your password.')</script>";
		exit();
	}
	
	$check_user = "select * from blood_donor where email = '$user_email' and pass = '$user_password'";
	
	 $run = mysqli_query($con,$check_user);

      
	 //$mno = 

      //echo $mno;
	if( mysqli_num_rows($run) > 0){
		
	   // $_SESSION['email'] = $user_email;
		   $sql = "DELETE FROM blood_donor WHERE email='$user_email'";

        if ($con->query($sql) === TRUE) {
                    echo "<script>window.open('blood_donor_login.php','_self')</script>";
               }else {
                      		echo "<script> alert('DELETE query find  error.')</script>";
             }		
	}
	else{
		echo "<script>alert('Email or password is incorrect.')</script>";
	}
}

} 

?>	
		<br> <br> <br> <br>
<footer class="container-fluid text-center">
  <p>Made by : student </p>
</footer>

</body>
</html>
