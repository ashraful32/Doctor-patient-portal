<?php 
session_start();
if(!($_SESSION['admin_email'])){
	header("location: login.php");
}
else{
	$email = $_SESSION['admin_email'];
} 
 if(empty($_GET['page'])) {
                     $page = 1;
       }else{
           $page = $_GET['page'];    
     } 
if($page==1){
  $cou = 0;
}else{
$cou = $_SESSION['cou_contact'];
if($cou==""){
 $cou = 0;
}
}
?>
<!doctype html>
<html lang="en">
<head>
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
	  <link href="assets/css/own_made.css?v=1.4.0" rel="stylesheet"/>
  <!--   <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>   -->  


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

				<h3> Ashraful Alam </h3>
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
				
				<li>
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
                <li class="active">
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


        <div class="content">
		   <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title" >Contact List</h4>	
								<p class="category" > Search from table by name, mobile number or emails:</p> 								
                               <input class="form-control" id="myInput" type="text" placeholder="Search..">
							   <br>
							  
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                    	<th>User Name: </th>
                                    	<th>Mobile Number</th>
                                    	<th>Date</th>
                                    	<th>View</th>
                                    </thead>
                                    <tbody>

                          <?php

               include 'db_config.php';
         //  $con = mysqli_connect("localhost","root","","store");
          //  $cou=0;


       $contact_id = $name = $mobile_number = $email = $date = $message = "";
         
           $limit = 12;

          if($page==1){
              $cou=0;
            }           

           $query1 = "select * from contact";
	      $run1 = mysqli_query($con,$query1);
          $total_record  = mysqli_num_rows($run1);
          $total_page = ceil($total_record / $limit);


          if($page > $total_page)
           {
              $page = $total_page;
           }
           
          $offset = $page * $limit - $limit ;

           $query = "select * from contact ORDER BY contact_id DESC limit $limit offset $offset";
         //$query = "select * from doctor where approve=0";
  
	     $run = mysqli_query($con,$query);
      if($cou < $total_record)
           {	 
	 while($row = mysqli_fetch_array($run)){
       
          $cou = $cou+1;
         $contact_id = $row[0];
		 $name = $row[1];
		 $mobile_number = $row[2];
         $email = $row[3];
         $date = $row[4];
         $message = $row[5];
      
     
	?>
           <tr>
                                        	<td><?php  echo $cou; ?></td>
                                        	<td><?php  echo $name; ?></td>
                                        	<td><?php  echo $mobile_number; ?></td>
                                        	<td><?php  echo $date; ?></td>
                                            <td> <a href="contact_info.php?contact_id=<?php echo $contact_id ?>" class="btn btn-info view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
                            <?php 
                                       } }

                                                $_SESSION['cou_contact'] = $cou;
                                              ?>

                                       <!-- <tr>
                                        	<td>1</td>
                                        	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="contact_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                           
                                        </tr>
                                        <tr>
                                        	<td>2</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>

                                        </tr>
                                        <tr>
                                        	<td>3</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
                                        <tr>
                                        	<td>4</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
                                        <tr>
                                        	<td>5</td>
                                          	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
                                        <tr>
                                        	<td>6</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
										 <tr>
                                        	<td>7</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
										 <tr>
                                        	<td>8</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
										 <tr>
                                        	<td>9</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
										 <tr>
                                        	<td>10</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
										 <tr>
                                        	<td>11</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
						                 <tr>
                                        	<td>12</td>
                                           	<td>Mohammad Ashraful Alam</td>
                                        	<td>01742668528</td>
                                        	<td>ashraful532sec@gmail.com</td>
                                           <td> <a href="user_info.php" class="btn btn-success view_ads"><i class="fa fa-eye" aria-hidden="true"></i></a> </td>
                                        </tr>
										 -->
										
                                    </tbody>
                                </table>

                            </div>
							
							<div class="for_pag text-center">
                                              <ul class="pagination ">

                                                 <li class="page-item <?= $page <= 1 ? 'disabled' : '' ?>">
                                                         <a class="page-link" href="?page=<?= $page - 1 ?>" tabindex="-1">Previous</a>
                                                 </li>

                                                  <?php for($i = 1; $i <= $total_page; $i++): ?>
                                                 <li class="page-item <?= $i == $page ? 'active' : '' ?>"><a class="page-link" href="?page=<?= $i ?>"><?= $i ?></a></li>
                                                 <?php endfor; ?> 
                                               <li class="page-item <?php echo $page >= $total_page ? 'disabled' : '' ?> ">
                                                      <a class="page-link" href="?page=<?= $page + 1 ?>">Next</a>
                                                </li>
                                                 <!--
                                                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                  <li class="active"><a class="page-link" href="#">1</a></li>
                                                  <li class="page-item "><a class="page-link" href="#">2</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                  <li class="page-item"><a class="page-link" href="#">Next</a></li> -->
                                              </ul>
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



 