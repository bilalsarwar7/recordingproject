<?php 


if (isset($_REQUEST['userid'])) 
{

	include 'connection.php';

    $userid = $_REQUEST['userid'];
    $location = $_REQUEST['loc'];
    $date = $_REQUEST['date'];
    


    $sql = "INSERT INTO `locations` (`userid`, `location`, `date`) VALUES ('$userid', '$location', '$date')";

    if (mysqli_query($connect,$sql)) {
            $delete = "DELETE FROM `audio_location_data` WHERE userid = '$userid' AND type = 'location'";
            if (mysqli_query($connect,$delete)) {
                echo json_encode(array('result' => "success"));
            }else{
                echo json_encode(array('result' => mysqli_error()));
            }
        }else{
           echo json_encode(array('result' => "fail"));
        }
    mysqli_close($connect);


}

 ?>