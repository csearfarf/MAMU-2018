<?php 

include('../connection.php');
session_start();
if(isset($_POST['candidateID'])){
	$_SESSION["candidateID"]=$_POST['candidateID'];
echo 1;	
}else{
	
echo 0;

}
 ?>