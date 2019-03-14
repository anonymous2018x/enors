<?php
    // connect to the db
    require_once('../config.php');
    $adm=5678;
    $fName='George';
    $lName='Kipkurui';
    $class='3';
    $stream='North';
    $gender='Male';
    $dob='1996-08-08';
    $doa='2010-01-13';
    $pID='32903031';
    $home='Tembelio';

    $stmp = $conn->prepare("UPDATE student_profiles set adm_no= :adm, student_first_name= :fName, student_last_name= :lName, class= :class, stream= :stream, gender= :gender, dob= :dob, doa= :doa, parent_id= :pID, area= :home WHERE adm_no= :adm");

    $stmp->bindParam(':adm', $adm);
    $stmp->bindParam(':fName', $fName);
    $stmp->bindParam(':lName', $lName);
    $stmp->bindParam(':class', $class);
    $stmp->bindParam(':stream', $stream);
    $stmp->bindParam(':gender', $gender);
    $stmp->bindParam(':dob', $dob);
    $stmp->bindParam(':doa', $doa);
    $stmp->bindParam(':pID', $pID);
    $stmp->bindParam(':home', $home);

    // insert a row
    if($stmp->execute()){
        $result=1;
    }
    echo $result;
    $conn=null;
?>