<?php
if (realpath(__FILE__) == realpath($_SERVER['DOCUMENT_ROOT'].$_SERVER['SCRIPT_NAME'])){ 
	header($_SERVER["SERVER_PROTOCOL"]." 404 Not Found");
    include('../errorPg/404.php');
}else {
$user='root';
$pass='';

try{
$conn= new PDO('mysql:host=localhost;dbname=enors',$user,$pass);
// echo "con was success";
}
catch(PDOExemption $e){
    print "Error!:" . $e->getMessage() . "<br/>";
    die();
}
}
?>