<!DOCTYPE html>
<html lang="en">
<head>
     <?php include 'title/website_title.php';?>
 
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     

  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


<style>

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

   
   


          
			.blue h1, h2, h3 {
				color: #2196F3;
			}





 

        .card-header-blue{
				background-color:#2196F3;
               
                color:#FFFFFF;
                border-bottom:3px solid #BBB;
               box-shadow: 0 8px 17px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
               font-family: 'Roboto', sans-serif;
               padding:0px;
               margin-top:0px;
               overflow:hidden;
               -webkit-transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
               transition: box-shadow 0.3s cubic-bezier(0.4, 0, 0.2, 1);
			}

       .card-heading {
    display: block;
    font-size: 24px;
    line-height: 28px;
     margin-top:2px;
      border-bottom:2px;
    margin-left:1em;
    border-bottom: 1px #2196F3;
    color:#fff;
   
}

</style>
</head>
<body>

<nav class="navbar navbar-default">
 <?php include 'navbar1.php';?>

</nav>
  


<div class="container">
<div class="row">
<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
 <br>
<h3 align="center">Our Honourable Teacher and Student </h3>
  <br>
</div>
</div>


 <div class="row">

<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
 <!-- <h2>Teacher</h2>
  <p> Project Superviser</p> -->
  <div class="card">
  <div class="card-header-blue">
           <h1 class="card-heading">Teacher</h1>
    </div>
    <img   class="card-img-top"  src="test_image/sir.png" alt="Card image" style="width:100%"  >
    <div class="card-body">
      <h4 class="card-title"> Md Forhad Rabbi , PhD </h4>
      <p class="card-text">Associate Professor <br>  Department of CSE , SUST</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>



<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
 <!-- <h2>Student</h2>
   <p>Image at the top (card-img-top):</p> -->
  <div class="card">
   <div class="card-header-blue">
           <h1 class="card-heading">Student</h1>
    </div>
    <img class="card-img-top" src="test_image/ashraful.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title"> Mohammad Ashraful Alam </h4>
      <p class="card-text"> Student <br> Department of CSE <br> Sylhet Engineering College </p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div>


<div class="col-sm-4 col-md-4 col-lg-4 col-xl-4">
 
  <div class="card">
    <div class="card-header-blue">
           <h1 class="card-heading">Student</h1>
    </div>
    <img class="card-img-top" src="test_image/sagar1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h4 class="card-title">Sagar Mitra</h4>
      <p class="card-text"> Student <br> Department of CSE <br> Sylhet Engineering College</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
  </div>
</div> 

</div>
<br>


<!--
<div class="row">
<div class="card-deck">
  <div class="card">
    
    <div class="card-header-blue">
           <h1 class="card-heading">Teacher</h1>
    </div>
    <img class="card-img-top" src="test_image/sir.png" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">  Md Forhad Rabbi , PhD  </h5>
      <p class="card-text">  Associate Professor <br>  Department of CSE , SUST</p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
    
  </div>
  <div class="card">
     <div class="card-header-blue">
           <h1 class="card-heading"> Student</h1>
    </div>
    <img class="card-img-top" src="test_image/ashraful.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Mohammad Ashraful Alam </h5>
      <p class="card-text"> Student <br> Department of CSE <br> Sylhet Engineering College </p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
  <div class="card">
     <div class="card-header-blue">
           <h1 class="card-heading"> Student</h1>
    </div>
    <img class="card-img-top" src="test_image/sagar.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Sagar Mitra</h5>
      <p class="card-text"> Student <br> Department of CSE <br> Sylhet Engineering College </p>
      <a href="#" class="btn btn-primary">See Profile</a>
    </div>
    <div class="card-footer">
      <small class="text-muted">Last updated 3 mins ago</small>
    </div>
  </div>
</div>
</div> 
-->
</div>

</body>
</html>
