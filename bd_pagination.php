<?php  
 //$connect = mysqli_connect("localhost", "root", "", "store");  
include 'db_config1.php';
 $record_per_page = 5;  
 $page = '';  
 $output = '';  

 $blood_group = "";  
 $district =  "";  

 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"]; 
      $blood_group = $_POST["blood_group"]; 
      $district = $_POST["district"];     
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  

if(isset($_POST["blood_group"]))  
 {  
     $blood_group = $_POST["blood_group"]; 
      $district = $_POST["district"];  
 }  
 else  
 {  
    // $k=9;
     //  echo $k;
    
 }  

//echo "<p>page=</p>"+$page;

 $k=0;

   $query = "SELECT * FROM blood_donor where  profile_view = '$k' and  blood_group='$blood_group' and district = '$district'  LIMIT $start_from, $record_per_page"; 
  // echo $query;
 $result = mysqli_query($con, $query);  

 while($row = mysqli_fetch_array($result))  
 {  

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

 
      $output .= " 
           <div class='media'>
                        <div class='row'>
     
                             <div class='media-left media-top'> 
	                             <div class='col-sm-3'>"; 

                                       if($picture == "")
                                         {
                                                    $output .="<img alt='User Pic' src='image/doctor.png' class='media-object'style='width:150px'>";
                                          }else{
                                                   $output .="<img alt='User Pic' src='".$picture."' class='media-object'style='width:150px'>";
                     
                                              }

                
                         $output .= " </div>
	                           </div>
                      <div class='media-body '>
	                         <div class='col-sm-6' style='border-left:1px solid #4CAF50; '>
                                  <h4 class='media-heading' >".$first_name." ".$last_name ."</h4>
                                   <p>Mobile No: ".$mobile_number."</p>
	                          </div>
	                     <div class='col-sm-6'  style='border-left:1px solid #4CAF50;'>
                       <p><i class='fa fa-map-marker'></i> Address</p>
	                   <p>". $district."</p>
	                   <p>". $address."</p>
	                </div>
	 
                 </div>
	            </div>
                </div>
                <hr>";

  
 }  

     $page_query = "SELECT * FROM  blood_donor where  profile_view = '$k' and  blood_group='$blood_group' and district = '$district' "; 

 $page_result = mysqli_query($con, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  

if( $total_pages >= 1)
{

$prev = $page-1;
$next = $page+1;

$output .= "<ul class='pagination '>";

$output .="<li class='page-item  ";

 if($page<=1)
{

   $output .="disabled";
   $output .="'  id='".$page."' ><a  href='#'   >Previous</a></li>";
   
}else{

   $output .="' id='".$prev."' ><a  href='#'   >Previous</a></li>";

}

//echo $page;

//echo $total_pages;

 for($i=1; $i<=$total_pages; $i++)  
 {  

         $output .="<li class='page-item  pagination_link "; 
         if($i == $page)
        {
             $output .="active";
          //  echo $page;
        }else{
            
        }
         $output .=" ' id='".$i."' ><a class='page-link' href='#'  >".$i."</a></li>";
     
 }  
 $output .=" <li class='page-item ";

if($page == ($total_pages))
{
   $output .="disabled";
   $output .="'  id=' ".$page." '><a  href='#' >Next</a></li>";

}else{

          $output .="' id='".$next."' ><a  href='#'  >Next</a></li>";
  
}


$output .="</ul>";

}
else{
        $output .="<h2> No Data Found </h2>";
}

 $output .= '</div><br /><br />';  
 echo $output;  
 ?>  


