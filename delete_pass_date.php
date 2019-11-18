<?php 


if (isset($_REQUEST['userid'])) 
{

	include 'connection.php';

    $userid = $_REQUEST['userid'];
    
    if (mysqli_query($connect,"DELETE FROM `audio_location_data` WHERE userid = '$userid' AND type = 'audio'")) {
          
           echo json_encode(array('result' => "success"));
        }else{
           echo json_encode(array('result' => "fail"));
        }
    mysqli_close($connect);


}

 ?>