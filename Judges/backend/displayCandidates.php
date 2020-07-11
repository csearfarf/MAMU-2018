<?php
include '../../appCode/dbConnection.php';

   $select_data=mysqli_query($connect, "SELECT * from tbl_candidates");


    $row = array();
    while ($row =  mysql_fetch_assoc($select_data)
    {
        $row[] = $row;
    }
    foreach ($row as $row)
    {
?>
            <div class="col-lg-2 pb-3 card mr-2 ml-2 mb-2 mt-2 pt-4">
              <div class="row">
                <div class="c-profile__list col-10 m-auto pb-0">
                  <div class="m-auto">
                  <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Mr. CCS" style="background-image: url('../admin/backend/candidates/uploads/Hexter Vince V. Drillon.jpg');"></a>
                  <a class="c-profile" data-toggle="tooltip" data-placement="top" title="Ms. CBFS" style="background-image: url(https://vignette.wikia.nocookie.net/arresteddevelopment/images/1/16/Season_3_Character_Promos_-_Lindsay_Bluth_F%C3%BCnke_01.jpg/revision/latest?cb=20111027201233);"></a>
                  </div>
                </div>
                <div class="col-10 m-auto"> 
                <h5 class="text-primary text-center mt-0"><span class="badge badge-warning">Candidates  #1</span></h5>
                <h5 class="text-center mt-0 pb-0">Mr. Hexter Vince Drillon<br>Ms. Malou Fiet</span></h5>
                </div>
              </div>
              <button class="btn btn-primary btn-block" type="submit" data-toggle="modal" data-target="#candidate_modal">Rate</button>
            </div>
<?php
    }
?>

?>