<?php 


if (isset($_REQUEST['userid'])) 
{

	include 'connection.php';

    $userid = $_REQUEST['userid'];
    $start = $_REQUEST['start'];
    $end = $_REQUEST['end'];
    $id = $_REQUEST['id'];
    

	$target_dir = "upload/";
    $target_file_name = $target_dir .basename($_FILES["file"]["name"]);

    $full = "http://recordingapp.ictgpak.com/".$target_dir .basename($_FILES["file"]["name"]);
                
    $sql = "INSERT INTO `audios_data` (`userid`, `audio`, `start_date`, `end_date`) VALUES ('$userid', '$target_file_name', '$start','$end')";

    if (mysqli_query($connect,$sql)) {
           mysqli_query($connect,"DELETE FROM `audio_location_data` WHERE userid = '$userid' AND type = 'audio'");
            move_uploaded_file($_FILES["file"]["tmp_name"], $target_file_name);
           echo json_encode(array('result' => $id));
        }else{
           echo json_encode(array('result' => "fail"));
        }
    mysqli_close($connect);


}

 ?>