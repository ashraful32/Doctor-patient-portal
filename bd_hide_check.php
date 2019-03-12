<?php
session_start();
if(!($_SESSION['bd_email'])){
	header("location: blood_donor_login.php");
}
else{
	$email = $_SESSION['bd_email'];
}
?>
<?php 

   if(isset($_POST['profile_view'])=== true )
{

     // $con = mysqli_connect("localhost","root","","store");
      include 'db_config1.php';

         $k="";
      $k = trim($_POST['profile_view']);

      //$sql = "select * form blood_donor ";
        $sql = "select * from blood_donor where email='$email' ";
        $result = mysqli_query($con ,$sql);
         
        // $result = mysqli_query( $con ,"select * from blood_donor where email = '$email' and profile_view IS NULL ");
         
         if(mysqli_num_rows($result) > 0){
                       

                       $result1 = mysqli_query( $con ,"update blood_donor set profile_view='$k' where email = '$email' ");
                                if($k==1){
                                 echo "<h5 style=display:inline;> <b> Hide </b></h5>";
                         }else{
                                echo "<h5 style=display:inline; >  <b> Unhide </b> </h5>";
                             }

               //  echo "<h1> 1 print </h1>";
                  // exit();
           }else{
                echo "<h4> Not update </h4>";
                  exit();
           }

       
    

  //echo $k;
  if($k==1){
       //echo "<h1> 1 print </h1>";
  }else{
       // echo "<h1> 0 print </h1>";
  }

}
  //echo "<h1>abcd</h1>";

?>