<?php
session_start();
include '../../appCode/dbConnection.php';
if(isset($_POST['login'])){

   $username=$_POST['username'];
   $password=$_POST['password'];
   $select_data=mysqli_query($connect, "SELECT * from tbl_accounts where username='$username' and password='$password'");

   if($row=mysqli_fetch_array($select_data)){
     $_SESSION['username'] = $row['username'];
     $_SESSION['type'] = $row['type'];
     $_SESSION['name'] = $row['name'];
     $_SESSION['id'] = $row['id'];

     if($row['type'] == 1){
        echo "success1";
     }
     else if($row['type'] == 0){
       echo "success0";
     }
   }
   else{
     echo "fail";
   }

}
else {
  // code...
  echo "fail";
}


?>
