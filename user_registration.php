<!DOCTYPE html>
<html lang="en">
<head>

  <?php include 'title/website_title.php';?>
 <!-- <title>Doctor Registration form</title>-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
  <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
   <script type="text/javascript">

  $.validator.setDefaults({
   
    errorPlacement: function (error, element) {
      if (element.prop('type') === 'radio') {
        error.insertAfter(element.parent().parent().parent());
      } else {
        error.insertAfter(element);
      }
    }
  });


 $.validator.addMethod('remote', function(value, element) {
   /* return this.optional(element) 
      || value.length >= 6
      && /\d/.test(value)
      && /[a-z]/i.test(value); */
    $('#email').blur(function(){
        var email = value;
          $.ajax({
            url: "bd_check.php",
            method: "POST",
            data:{email: email},
            dataType: "text",
            success:function(data){
                    $data1 = data;
                   console.log("data="+$data1);

                 $('#availability').html(data);         
             
         }
            

       });
    });
      
       return true;
   }, "")
  



$.validator.addMethod("minAge", function(value, element, min) {
    var today = new Date();
    var birthDate = new Date(value);
    var age = today.getFullYear() - birthDate.getFullYear();
 
    if (age > min+1) {
        return true;
    }
 
    var m = today.getMonth() - birthDate.getMonth();
 
    if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
    }
 
    return age >= min;
}, "You are not old enough!");



				
					
		$(document).ready(function(){
		$("form[name=register]").validate({
         
			rules:{
				firstName:{
					required: true,
					minlength: 1
				},
				
				lastName:{
					required: true,
					minlength: 1
				},
				
				mobile_number:{
					required: true,
					number: true,
					minlength: 11,
				   	maxlength: 14
                    },

				email:{
					required:true,
					email:true,
                    remote:true
				},
				
				password:{
					required: true,
					minlength: 5
				},
				
				confirm_password:{
					required: true,
					minlength: 5,
					equalTo: "#password"
				},
				
				birthDate:{
					required: true,
                     minAge : 18 
                   
				},
				district:{
					required: true
                      
				},
				address:{
					required: true
                    
				},
				
				gender:{
					required: true
				},
                blood_group:{

                   required: true
                },
              
				
				
			},
			messages:{
				firstName:{
					required: "Name is required",
					minlength: "Name minimum 5 character"
				},
				lastName:{
					required: "Name is required",
					minlength: "Name minimum 5 character"
				},
				mobile_number:{
					required: "Mobile Number is Required.",
					number: "Only Number is allowed",
					minlength: "Mobile Number Minimum 11 digit.",
					maxlength: "Mobile Number Maximum 14 digit."
					
				},

                  email:{
                      remote:"Email are not available"
                  },
				
				password:{
					required: "Password is required",
					minlength: "Password minimum 5 character"
				},
				confirm_password:{
					required: "Password is required",
					minlength: "Password minimum 5 character",
					equalTo: "Please enter the same password as above."
				},
				
				birthDate:{
					required: "BirthDate is required",
                    minAge: "You must be at least 18 years old!"
				},
				district:{
					required: "District is required"
				},
				address:{
					required: "Address is required"
				},
				gender:{
					required: "Gender is Required"
				},
          
               
               blood_group:{

                  required: "Blood Group is Required"
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

	<h3> <center>Welcome to User Section </center></h3>
		
     </div>
	 
	 
	   
	   <div class="container">
            <form class="form-horizontal" role="form">
                <h2>User Registration Form</h2>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">First Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="firstName" id="firstName" placeholder="First Name" class="form-control input-sm" autofocus>
                        
                    </div>
                </div>
				<div class="form-group">
                    <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control input-sm" autofocus>
                        
                    </div>
                </div>
				
					
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio"  name="gender" id="femaleRadio" value="Female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" name="gender" id="maleRadio" value="Male">Male
                                </label>
                            </div>
                           
                        </div>
                    </div>
                </div> <!-- /.form-group -->
				
				
				
			
				
				
				 <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Mobile No.</label>
                    <div class="col-sm-9">
                        <input type="text" id="mobile_number" placeholder="Mobile Number" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="col-sm-3 control-label">Email</label>
                    <div class="col-sm-9">
                        <input type="email" id="email" placeholder="Email" class="form-control input-sm">
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control input-sm">
                    </div>
                </div>
				 <div class="form-group">
                    <label for="password" class="col-sm-3 control-label">Confirm Password</label>
                    <div class="col-sm-9">
                        <input type="password" id="password" placeholder="Password" class="form-control input-sm">
                    </div>
                </div>
		        
			<!--	<div class="form-group">
				      <label for="title" class="col-sm-3 control-label">Profile Picture</label>
				            <div class="col-sm-9">
                            
                            <input class="form-control input-sm" type="file" name="imageName" accept="image/*" placeholder="Photo1">
						 </div>
                 </div>  -->
				
	
				
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="date" id="birthDate" class="form-control input-sm">
                    </div>
                </div>
               
                
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox">I accept <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-4">
                        <a href="user_profile.php" class="btn btn-primary btn-block">Register</a>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->

	
		<br> <br> <br> <br>
		

<footer class="container-fluid text-center">
  <p>Made by : student</p>
</footer>

</body>
</html>
