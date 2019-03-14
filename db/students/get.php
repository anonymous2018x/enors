<?php
    // connect to the db
    require_once('../config.php');
    $adm=2577;
    $stmp=$conn->prepare("SELECT * FROM student_profiles WHERE adm_no= :adm");
    $stmp->bindParam(':adm', $adm);
    $stmp->execute();

    $data = $stmp->fetch(PDO::FETCH_ASSOC);
    echo json_encode($data);
    $conn=null;
 ?>