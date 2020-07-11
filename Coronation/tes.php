<?php
include '.././appCode/dbConnection.php';

$query=mysqli_query($connect,"SELECT a.round, a.id as category_id,a.category_name, b.id as criteria_id,b.criteria_name,b.max_score FROM `tbl_coronation` a LEFT JOIN tbl_criteria b on a.id=b.category_id where a.round=1")or die("ERROR IN SELECTION");
$rowcount=mysqli_num_rows($query);
;

while ($row = mysqli_fetch_assoc($query)) {

echo $row['category_id'];
	# code...
}

  ?>