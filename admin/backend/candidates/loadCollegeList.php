<?php 
include('./backend/connection.php');
$result = mysqli_query($connect,"SELECT * FROM `tbl_college`")or die("ERROR IN SELECTION");

while( $row = mysqli_fetch_assoc($result) ) {
	
echo '
<option value="'.$row['id'].'"> '.$row['abbr'].'</option>
';
}





 ?>