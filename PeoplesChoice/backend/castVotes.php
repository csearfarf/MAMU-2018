<?php


include "../../appCode/dbConnection.php";

if(isset($_POST["action"]) && $_POST["action"] == "cast"){

    //here are the variables
    $userID = $_POST["userID"];
    $userFN = $_POST["userFN"];
    $userCOL = $_POST["userCol"];
    $idfemale = $_POST["votedFemale"];
    $idmale = $_POST["votedMale"];

    if($userCOL == "CCS"){
    	$userCOL = 2;
    }
    else if($userCOL == "COS"){
    	$userCOL = 3;
    }
    else if($userCOL == "CTM"){
		$userCOL = 4;
    }

    else if($userCOL == "COAHS"){
    	$userCOL = 5;
    }

    else if($userCOL == "CTHM"){
    	$userCOL = 6;
    }

    else if($userCOL == "COE"){
    	$userCOL = 7;
    }

    else if($userCOL == "CAL"){
    	$userCOL = 8;
    }

    else if($userCOL == "HSU"){
    	$userCOL = 9;
    }

    else if($userCOL == "CCSCE"){
    	$userCOL = 10;
    }

    else if($userCOL == "CGPP"){
    	$userCOL = 11;
    }

    else if($userCOL == "CBFS"){
    	$userCOL = 12;
    }



    //make your query here
	$checkQuery="Select * from tbl_students where student_number = '".$userID."'";

	$queryInsert="INSERT INTO `tbl_students` ( `student_number`, `college_id`, `name`, `registered`) VALUES ( '$userID', '$userCOL', '$userFN', '1')"; // if not inserted yet 

	$query=mysqli_query($connect,$checkQuery) or die ("ERROR IN SELECTION of STUDENT NUMBER");

    if (mysqli_num_rows($query)>0) { // KAPAG MERON NG DATA SA STUDENTS MATIK YUN REGISTERED
	
	echo "1" ;

	}

	else{
	$insert=mysqli_query($connect,$queryInsert) or die ("ERROR IN SELECTION of inserting student data");
	if($insert){
		$STUDENTID=mysqli_insert_id($connect);
		$date = date('Y/m/d H:i:s');
		$resultvote="0";

		if($idmale!="" || $idmale!=null){
		$maleINSERT="INSERT INTO `tbl_peoples_choice` ( `candidate_id`, `student_id`, `day`) VALUES ( '.$idmale.', '.$STUDENTID.', '.$date.')";
		$maleINSERTED=mysqli_query($connect,$maleINSERT) or die ("ERROR IN SELECTION of male insertion");
		if($maleINSERTED){
			$resultvote="1";
		}
		}
		

		if($idmale!="" || $idmale!=null){
		$femaleINSERT="INSERT INTO `tbl_peoples_choice` ( `candidate_id`, `student_id`, `day`) VALUES ( '.$idfemale.', '.$STUDENTID.', '.$date.')";
		$maleINSERTED=mysqli_query($connect,$femaleINSERT) or die ("ERROR IN SELECTION of male insertion");

			if($maleINSERTED){
				$resultvote="1";
			}
		}

		if($resultvote=="1"){

		// remove all session variables
		session_unset(); 




		}
		echo $resultvote;


	}else{
		// redirect to first page
		$resultvote="2";
		echo $resultvote;
	}


}
}

else{

	echo "0";

}


?>