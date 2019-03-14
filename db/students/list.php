
<?php

if(is_ajax()){
    require_once('../../db/config.php');
    $sth = $conn->prepare("SELECT `adm_no`, `student_first_name`, `student_last_name`, `class`, `stream` FROM student_profiles ORDER BY adm_no asc");
    $sth->execute();
    $result = $sth->fetchAll();
    echo json_encode($result);
    $conn = null;
}else{
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    include_once('../../errorPg/404.php');
}
// function to check if its ajax
function is_ajax(){
    return isset($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest';
}
    ?>