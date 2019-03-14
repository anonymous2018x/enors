<?php
    require_once('../config.php');

    $adm=5678;
    $fName='George';
    $lName='Kipkurui';
    $class='4';
    $stream='North';
    $gender='Male';
    $dob='1996-05-09';
    $doa='2010-01-13';
    $pID='32903031';
    $home='Talget';

    $stmp=$conn->prepare("INSERT INTO student_profiles(adm_no, student_first_name, student_last_name, class, stream, gender, dob, doa, parent_id, area)
    VALUES (:adm, :fName, :lName, :class, :stream, :gender, :dob, :doa, :pID, :home)");
    
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
    
    if($stmp->execute()){
        $result=1;
    }
    echo $result;
    $conn=null;
?>