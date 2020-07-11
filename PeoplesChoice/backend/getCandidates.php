<?php
include "../../appCode/dbConnection.php";

if(isset($_POST["candidateType"]) && $_POST["candidateType"] == "1"){
    

    $result = mysqli_query($connect,"SELECT a.id,a.image,a.candidate_number,a.name,a.gender,a.gender,b.college_name FROM tbl_candidates a LEFT JOIN tbl_college b on a.college_id=b.id WHERE gender = 1 ORDER BY candidate_number ASC")or die("ERROR IN SELECTION");


    while( $row = mysqli_fetch_assoc($result) ) {
?>

                    <div class="col-lg-4 col-sm-12 mt-3">
                        <div class="avatar-upload mt-3">
                            <div class="avatar-preview text-center mr-0 divMr<?php echo $row['id']?>" style="margin-right: none;">
                                <div id="imgMale_<?php echo $row['id']?>" class="img-raised" style="background-image: url('../admin/backend/candidates/uploads/<?php echo $row['name']?>.jpg');justify-content: center">
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <h3 class="title pt-5 mb-2 text-center"><?php echo $row['name']?></h3>
                        <div class="mt-0 pt-0 text-center">
                            <span class="badge badge-primary"><?= $row['college_name']?></span>
                            <span class="badge badge-info">Candidate #<?php echo $row['candidate_number']?></span>
                        </div>
                        <button class="btn btn-primary btn-block vote" id="<?php echo $row['id']?>" onclick="_voteMale(this.id);">
                            Vote
                        </button>
                    </div>
<?php

        }
          


}
else if(isset($_POST["candidateType"]) && $_POST["candidateType"] == "0"){

    $result = mysqli_query($connect,"SELECT a.id,a.image,a.candidate_number,a.name,a.gender,a.gender,b.college_name FROM tbl_candidates a LEFT JOIN tbl_college b on a.college_id=b.id WHERE gender = 0 ORDER BY candidate_number ASC")or die("ERROR IN SELECTION");
    while( $row = mysqli_fetch_assoc($result) ) {
?>

                    <div class="col-lg-4 col-sm-12 mt-3">
                        <div class="avatar-upload mt-3">
                            <div class="avatar-preview text-center mr-0 divMs<?php echo $row['id']?>" style="margin-right: none;">
                                <div id="imgFemale_<?php echo $row['id']?>" class="img-raised" style="background-image: url('../admin/backend/candidates/uploads/<?php echo $row['name']?>.jpg');justify-content: center">
                                </div>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <h3 class="title pt-5 mb-2 text-center"><?php echo $row['name']?></h3>
                        <div class="mt-0 pt-0 text-center">
                            <span class="badge badge-primary"><?= $row['college_name']?></span>
                            <span class="badge badge-info">Candidate #<?php echo $row['candidate_number']?></span>
                        </div>
                        <button class="btn btn-primary btn-block vote" id="<?php echo $row['id']?>" onclick="_voteFemale(this.id);">
                            Vote
                        </button>
                    </div>
<?php

        }
}
else{
    echo "tnginna";
}

?>