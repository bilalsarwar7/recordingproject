<?php 

    include("connection.php");
    $userid = $_REQUEST["userid"];
    $sql = "SELECT * FROM `audio_location_data` WHERE userid = '$userid'";
    $res = mysqli_query($connect,$sql);
    $r=mysqli_num_rows ( $res );
    $audios = array(); 
    if ($r>0) {
        while ($row = mysqli_fetch_array($res)) {
            $data = array();
            $data['start_date'] = $row['start_date'];
            $data['end_date'] = $row['end_date'];
            $data['type'] = $row['type'];
            $data['result'] = "1";
            array_push($audios, $data);
        }

    }else{
        $data = array();
        $data['result'] = "0";
        array_push($audios, $data);
    }
    echo json_encode($audios);
    mysqli_close($connect);
 ?>