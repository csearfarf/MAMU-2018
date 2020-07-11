 
                      <div class="col-md-6 m-auto ">
                        <div class="container">
                            <p class="title h4 text-center mb-5">MALE CANDIDATES</p>
                          <div id="candidatelistMale " >

 <?php 

include "../../appCode/dbConnection.php";
$result = mysqli_query($connect,"select a.candidate_number ,a.id,a.name,a.gender ,count(candidate_id) total from tbl_candidates a left join tbl_peoples_choice b on a.id=b.candidate_id where gender=1 group by a.id order by total desc ")or die("ERROR IN SELECTION");

$studentCount=mysqli_query($connect,"select count( DISTINCT id ) as totalStudents from tbl_students")or die("ERROR IN SELECTION TBL STUDENTS ");
$rowCount = mysqli_fetch_assoc($studentCount);
$studenttotal=$rowCount['totalStudents']; // STUDENT TOTALITIES


$result1 = mysqli_query($connect,"select a.candidate_number ,a.id,a.name,a.gender ,count(candidate_id) total from tbl_candidates a left join tbl_peoples_choice b on a.id=b.candidate_id where gender=0 group by a.id order by total desc ")or die("ERROR IN SELECTION");



while( $row = mysqli_fetch_assoc($result) ) {
 ?>
                          <!---->
                          <div class="row animated fadeIn" style="margin-top: -70px;">
                            <div class="col-md-4 col-sm-4 m-auto">
                              <div class="avatar-upload " >
                                  <div class="avatar-preview text-center ">
                                <div id="imgFemale"  class="img-raised" style="background-image: url('../assets/img/user_default.png'); height: 120px; width: 120px;">
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-8 m-auto p-auto">
                             <div class="barWrapper " >
                            <?php // computation

                                $percentage=$row['total']/$studenttotal*100;
                            ?>
                          
                             <div class="progress" style="height:12px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="height:12px;width: <?php echo $percentage;?>%" aria-valuenow="<?php echo $percentage;?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                            <p class="text-right" >
                               <?php 
                                echo round($percentage,2) . "% of the " . $studenttotal . " students."; ?>
                            </p>
                            <span class="progressText"><h6 class="h5">
                              <?php 
                              if($row['candidate_number']==1){
                                echo "Candidate M";
                                }if($row['candidate_number']==2){
                                  echo "Candidate L";
                                }if($row['candidate_number']==3){
                                  echo "Candidate K";
                                }if($row['candidate_number']==4){
                                  echo "Candidate J";
                                }if($row['candidate_number']==5){
                                  echo "Candidate I";
                                }if($row['candidate_number']==6){
                                  echo "Candidate H";
                                }if($row['candidate_number']==7){
                                  echo "Candidate G";
                                }if($row['candidate_number']==8){
                                  echo "Candidate F";
                                }if($row['candidate_number']==9){
                                  echo "Candidate E";
                                }if($row['candidate_number']==10){
                                  echo "Candidate D";
                                }if($row['candidate_number']==11){
                                  echo "Candidate C";
                                }if($row['candidate_number']==12){
                                  echo "Candidate B";
                                }if($row['candidate_number']==13){
                                  echo "Candidate A";
                                }
                              ?></h6>
                             </span>
                            </div>
                            </div>
                          </div>
                          <!---->
                          
<?php 
}// while;
?>
</div>
</div>
</div>

                       <div class="col-md-6 m-auto">
                        <div class="container">

                            <p class="title h4 text-center mb-5">FEMALE CANDIDATES</p>
                          <div id="candidatelistFemale" class="">
<?php 

while( $row1 = mysqli_fetch_assoc($result1) ) {


?>
                          <!---->
                          <div class="row animated fadeIn" style="margin-top: -70px;">
                            <div class="col-md-4 col-sm-4 m-auto">
                              <div class="avatar-upload " >
                                  <div class="avatar-preview text-center ">
                                <div id="imgFemale" class="img-raised" style="background-image: url('../assets/img/user_default.png'); height: 120px; width: 120px;">
                                </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-8 m-auto p-auto">
                             <div class="barWrapper ">
                            <?php // computation

                                $percentage2=$row1['total']/$studenttotal*100;
                            ?>
                         

                             <div class="progress" style="height:12px;">
                          <div class="progress-bar bg-danger" role="progressbar" style="height:12px;width: <?php echo $percentage2;?>%" aria-valuenow="<?php echo $percentage2;?>" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>

                            <p class="text-right" >
                               <?php 
                                echo round($percentage2,2) . "% of the " . $studenttotal . " students."; ?>
                            </p>
                                  
                            <span class="progressText"><h6 class="h5">
                              <?php 
                              if($row1['candidate_number']==1){
                                echo "Candidate M";
                                }if($row1['candidate_number']==2){
                                  echo "Candidate L";
                                }if($row1['candidate_number']==3){
                                  echo "Candidate K";
                                }if($row1['candidate_number']==4){
                                  echo "Candidate J";
                                }if($row1['candidate_number']==5){
                                  echo "Candidate I";
                                }if($row1['candidate_number']==6){
                                  echo "Candidate H";
                                }if($row1['candidate_number']==7){
                                  echo "Candidate G";
                                }if($row1['candidate_number']==8){
                                  echo "Candidate F";
                                }if($row1['candidate_number']==9){
                                  echo "Candidate E";
                                }if($row1['candidate_number']==10){
                                  echo "Candidate D";
                                }if($row1['candidate_number']==11){
                                  echo "Candidate C";
                                }if($row1['candidate_number']==12){
                                  echo "Candidate B";
                                }if($row1['candidate_number']==13){
                                  echo "Candidate A";
                                }
                              ?>
                            </h6>
                             </span>
                            </div>
                            </div>
                          </div>
                          <!---->
                         
<?php 
}// while;
?>

 </div>
</div>
</div>

 