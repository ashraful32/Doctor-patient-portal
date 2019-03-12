<?php 
   if(isset($_POST['contact_del'])=== true )
{
     //  $con = mysqli_connect("localhost","root","","store");
         include 'db_config.php';
  
          $contact_id="";
          $contact_id = trim($_POST['contact_del']);

                   if($con->connect_error){
		            die("Connection failed: " . $con->connect_error);
		          }else{

                   $sql = "DELETE FROM contact WHERE contact_id = '$contact_id'";
              if($con->query($sql) === TRUE){
                    echo "<script>window.open('contact_list.php','_self')</script>";
               }else {
                      echo "<script> alert('DELETE query find  error.')</script>";
             }
                     
           }

}

?>