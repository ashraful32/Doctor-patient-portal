<?php 
include 'db_config1.php';
//$connect = mysqli_connect("localhost","root","","store");
if(isset($_POST["loc"])){
   
   $output = '';
   $query = "Select DISTINCT district from blood_donor where district like '%".$_POST["loc"]."%'  ";

   $result = mysqli_query($con, $query);
   
    $output = '<ul id="district_id" class="t1 list-unstyled">';
    
    if(mysqli_num_rows($result)> 0){
         
           while($row = mysqli_fetch_array($result))
            {
                 $output .= '<li>'.$row["district"].'</li>';

     
             }

    }
     else{

           // $output  .= '<li> District not found. </li>';
     }

  $loca = $_POST["loc"];
  
       
     $output .=  '</ul>';
     
      echo $output;
     
    
}

?>

