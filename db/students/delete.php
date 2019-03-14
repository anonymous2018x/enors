<?php
    // connect to the db
    require_once('../config.php');

    $adm=5678;

    $stmp = $conn->prepare("DELETE FROM student_profiles WHERE adm_no= :adm");

    $stmp->bindParam(':adm', $adm ,PDO::PARAM_INT);
    if($stmp->execute()){
        $result=1;
    }
    echo $result;
    $conn=null;
?>