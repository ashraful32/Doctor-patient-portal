<?php
session_start();
if(!($_SESSION['admin_email'])){
	header("location: login.php");
}
else{
	$email = $_SESSION['admin_email'];
} 
?>
<?php
  $contact_id = $_GET['contact_id'];
?>
<!doctype html>
<html lang="en">
<head>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
 $(document).ready(function(){
    $("#contact_delete").click(function(){

                    //  var val2 = $("#profile_view").val();
                //alert(val2);
         var val = "<?php echo $contact_id ?>";

              $.ajax({
            url:"contact_del.php",
            method:"POST",
            data:{contact_del: val},
            dataType: "text",
            success:the_function,

          });


               function the_function(data){
                         //window.open('blood_donor.php','_self');  
               // console.log(data);
                //$('#test').html(data);  
                $('.card-footer').html(data);
                         
           }

       // $("#div1").append("ok 1234567890 ") ;

          
    });
}); 
</script>

	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Admin Panel</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>  


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
               <!--  <a href="http://www.creative-tim.com" class="simple-text">
                    Creative Tim
                </a> -->
				<h3>Ashraful Alam</h3>
            </div>

            <ul class="nav">
                 <li>
                    <a href="dashboard.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
				
                <li>
                    <a href="admin_profile.php">
                        <i class="pe-7s-user"></i>
                        <p>Admin Profile</p>
                    </a>
                </li>
				
                <li>
                    <a href="pending_request.php">
                      <i class="fa fa-info-circle"></i>
                        <p>Pending Request</p>
                    </a>
                </li>
				
				<li>
                    <a href="approved_request.php">
                      <i class="fa fa-check-circle" ></i>
                        <p>Approved Request</p>
                    </a>
                </li>
				
				<li class="active">
                    <a href="blood_donor.php">
                        <i class="pe-7s-note2"></i>
                        <p>Blood donor List</p>
                    </a>
                </li>
				
				
                
                <li>
                    <a href="user.php">
                        <i class="pe-7s-science"></i>
                        <p>User List</p>
                    </a>
                </li>

                <li>
                    <a href="contact_list.php">
                        <i class="pe-7s-map-marker"></i>
                        <p>Contact</p>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="pe-7s-bell"></i>
                        <p>Notifications</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="#">
                        <i class="pe-7s-rocket"></i>
                        <p>Upgrade to PRO</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">User</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
								<p class="hidden-lg hidden-md">Dashboard</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret hidden-sm hidden-xs"></b>
                                    <span class="notification hidden-sm hidden-xs">5</span>
									<p class="hidden-lg hidden-md">
										5 Notifications
										<b class="caret"></b>
									</p>
                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
								<p class="hidden-lg hidden-md">Search</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               <p>Account</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
										Dropdown
										<b class="caret"></b>
									</p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li>
                        <li>
                            <a href="admin_logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

                                     
  <?php

              include 'db_config.php';

          // $con = mysqli_connect("localhost","root","","store");
          
          $name = $mobile_number = $email = $date = $message = "";
         
         $query = "select * from contact where contact_id='$contact_id'";
  
	     $run = mysqli_query($con,$query);

     	 while($row = mysqli_fetch_array($run)){
		  
           $contact_id = $row[0];
		 $name = $row[1];
		 $mobile_number = $row[2];
         $email = $row[3];
         $date = $row[4];
         $message = $row[5];
      }
	     
	?>




        <div class="content">
		   <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" style="color: blueviolet;">Contact info </h4>
                                <p class="category" style="color :blueviolet;">Check this info.</p>
                            </div>
							
		
							 
                            <!-- <div class="content table-responsive table-full-width"> -->
							 <div class="content">
							 
							   <div class="row">
							 
													  
							   <div class=" col-md-12 col-lg-12 "> 
							 
                                <table class="table table-hover table-striped">
                                   <tbody>
             
 
                      <tr>
                        <td>Contact Person Name:</td>
                        <td> <?php  echo $name; ?> <!-- Mohammad Ashraful Alam --> </td>
						
                      </tr>
                      <tr>
                        <td>Mobile Number</td>
                        <td> <?php echo $mobile_number; ?> <!-- 01742668528 --> </td> 
						
                      </tr>
                      
                       <tr>
                        <td>Email</td>
                        <td><?php  echo $email; ?> <!-- ashraful532sec@gmail.com --> </td>
                      </tr>
                      
                      <tr>
                        <td>Date</td>
                        <td> <?php  echo $date; ?> <!-- 25/05/1995 --> </td>
                      </tr>
                      
                      <tr>
                        <td>Message</td>
                        <td> <?php  echo $message; ?> <!-- Moulovi Bazar--> </td>
                      </tr>
                                          
                    </tbody>
                                </table>

                            </div>
							 </div>
							
							 </div>
							 
							 
							 <div class="card-footer">
							   <p align="center">

							 <button type="button" id="contact_delete" name="contact_delete" class="btn btn-primary">Delete</button> 
                              <a href="contact_list.php" class="btn btn-primary">Back to Contact List</a>
							   </p>
							 </div>
							 
							 
                        </div>
                    </div>
                 </div>
            </div>
        </div>  
		



        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Portfolio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                               Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <p class="copyright pull-right">
                     &copy; <script>document.write(new Date().getFullYear())</script>  All right Reserved.
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

</html>



 