<?php 
   if(isset($_POST['profile_del'])=== true )
{
        include 'db_config.php';
      // $con = mysqli_connect("localhost","root","","store");
  
          $bd_id="";
      $bd_id = trim($_POST['profile_del']);

                   if($con->connect_error){
		            die("Connection failed: " . $con->connect_error);
		          }else{

                   $sql = "DELETE FROM blood_donor WHERE blood_donor_id='$bd_id'";
              if($con->query($sql) === TRUE){
                    echo "<script>window.open('blood_donor.php','_self')</script>";
               }else {
                      echo "<script> alert('DELETE query find  error.')</script>";
             }
                     
           }

}

?>