<?php 

    include("connection.php");
    $sql = "SELECT * FROM `cafes`";
    $res = mysqli_query($connect,$sql);
    $audios = array(); 
    if ($res) {
        while ($row = mysqli_fetch_array($res)) {
            $data = array();
            $data['result'] = "1";
            $data['name'] = $row['name'];
            $data['location'] = $row['location'];
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