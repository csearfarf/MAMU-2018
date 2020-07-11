

function inputValidate(){

  var id = $("#tbIdnumber").val();
  var fullname = $("#tbFullname").val();
  var collegeID = $("#tbCollege").val();
  var college =$('#collegeList [value="' + collegeID + '"]').data('value');

  if(college==null){
    college=0; //undefined
  }

  if(id === "" && fullname === "" && college === ""){

    Snackbar.show({
      actionTextColor: '#D59B46',
      text: 'Please Fill-up all Fields',
      pos: 'top-center',
      actionText: 'Okay',
      onActionClick: function(element) {
        //Set opacity of element to 0 to close Snackbar
        $(element).css('opacity', 0);
         $("#tbIdnumber").focus();
    }
    });

  }
  else if(id === ""){

    Snackbar.show({
      actionTextColor: '#D59B46',
      text: 'ID number cannot be Empty',
      pos: 'top-center',
      actionText: 'Okay',
      onActionClick: function(element) {
        //Set opacity of element to 0 to close Snackbar
        $(element).css('opacity', 0);
         $("#tbIdnumber").focus();
    }
    });

  }
  else if(fullname === ""){

    Snackbar.show({
      actionTextColor: '#D59B46',
      text: 'Fullname cannot be Empty',
      pos: 'top-center',
      actionText: 'Okay',
      onActionClick: function(element) {
        //Set opacity of element to 0 to close Snackbar
        $(element).css('opacity', 0);
         $("#tbFullname").focus();
    }
    });

  }
  else if(college === ""){

    Snackbar.show({
      actionTextColor: '#D59B46',
      text: 'College cannot be Empty',
      pos: 'top-center',
      actionText: 'Okay',
      onActionClick: function(element) {
        //Set opacity of element to 0 to close Snackbar
        $(element).css('opacity', 0);
         $("#tbCollege").focus();
    }
    });

  }

  else{


    if(id){

          //checks validates k11 substring
          var pass = false;
          var str = id;
          var resK = str.substring(0,3);
          var resA = str.substring(0,1);
          //validate id number an lenght
          var re = new RegExp("^([a-z]{1,}[0-9]{7,})$");

          if (re.test(str)){

            if(resK == "K11" || resK == "k11"){

              if(resK.length > 8 || resK.length < 0){

                document.getElementById("errorID").innerHTML = "<span class='text-danger' style='size:.5em;'>Invalid Student ID Number</span>"
                pass = false;
                
              }

              else{
                
                document.getElementById("errorID").innerHTML = "";
                pass = true;
              }
            }

            else if(resA == "a" || resA == "A"){

              if(resA.length > 8 || resA.length < 0){
                
                document.getElementById("errorID").innerHTML = "<span class='text-danger' style='size:.5em;'>Invalid Student ID Number</span>"
                pass = false;
              }
              else{

                document.getElementById("errorID").innerHTML = "";
                pass = true;
              }

            }
            else{
              document.getElementById("errorID").innerHTML = "<span class='text-danger' style='size:.5em;'>Invalid Student ID Number</span>"
            $("#tbIdnumber").focus();
            pass = false;
            }
          }
          else{
            document.getElementById("errorID").innerHTML = "<span class='text-danger' style='size:.5em;'>Invalid Student ID Number</span>"
            $("#tbIdnumber").focus();
            pass = false;
          }
    }
    if(fullname.length <= 6){

      document.getElementById("errorFN").innerHTML = "<span class='text-danger' style='size:.5em;'>Full Name is Required</span>"
            $("#tbFullname").focus();
            pass = false;
    }
    else{
      document.getElementById("errorFN").innerHTML = ""
      pass = true;
    }


    if (pass != true || pass==false ){

      Snackbar.show({
        actionTextColor: '#D59B46',
        text: 'Stop messing around !',
        pos: 'top-center',
        actionText: 'Okay',
        onActionClick: function(element) {
          //Set opacity of element to 0 to close Snackbar
          $(element).css('opacity', 0);
           $("#tbIdnumber").focus();
      }
      });
    }
    else{

        $.ajax({
            type: "POST",
            url : "./backend/checkVoted.php?",
            data: {id:id},
            success: function (data){
              if(data=="1"){

              sessionStorage.setItem("userID",id);
              sessionStorage.setItem("userFN",fullname);
              sessionStorage.setItem("userCol",college);

              window.location.replace("peoplesvote.php");
            }else if(data=="2"){
                    Snackbar.show({
               text: 'A problem has accured : ACCOUNT ALREADY VOTED!',
               actionTextColor: '#ff0000',
               actionText: 'Refresh',
               pos: 'top-right',
               onActionClick: function(element) {
                   //Set opacity of element to 0 to close Snackbar 
                   $(element).css('opacity', 0);
                   location.reload();
                   sessionStorage.clear();
            
               }
            });
            }// else
            else{
              alert(data);
            }
            }// success data

        });

      

    }

    
  }

}

function checkSession(){

  var userID = sessionStorage.getItem("userID");
  var userFN = sessionStorage.getItem("userFN");
  var userCol = sessionStorage.getItem("userCol");

  if(userID == null || userFN == null || userCol == null){

    window.location.replace("../PeoplesChoice/");

  }
  else{
    $('#msUmak, #mrUmak').click(function () {
      if (this.id == 'mrUmak') {
        
        $.ajax({
            type: "POST",
            url : "./backend/getCandidates.php?",
            data: {
              candidateType:"1"
            },
            success: function (data){
              $('#candidateDisplayModal').html(data);
              $('#candidate_modal').modal('show');
            }

        });

      }
      else if (this.id == 'msUmak') {
        
        $.ajax({

          type: "POST",
          url : "./backend/getCandidates.php?",
          data: {
            candidateType:"0"
          },
          success: function (data){
            $('#candidateDisplayModal').html(data);
            $('#candidate_modal').modal('show');
          }

        });

      }
  });
  }
}

function _voteMale(id){

  var url = document.getElementById("imgMale_"+id).style.backgroundImage;


  var candidateID = id;

  sessionStorage.setItem("maleImg",url);

  //sets voted male id
  sessionStorage.setItem("voteMale",candidateID);
  var candidateMal = sessionStorage.getItem("voteMale");

  loadImage();
  checkVotes();

  $('#candidate_modal').modal('toggle');

}

function _voteFemale(id){

  
  var url = document.getElementById("imgFemale_"+id).style.backgroundImage;


  var candidateID = id;

  sessionStorage.setItem("femImg",url);

  //sets voted male id
  sessionStorage.setItem("voteFemale",candidateID);
  var candidateFem = sessionStorage.getItem("voteFemale");

  loadImage();
  checkVotes();

  $('#candidate_modal').modal('toggle');
}


function loadImage(){

  if (sessionStorage.getItem("femImg") != null) {
    var candidateFem = sessionStorage.getItem("femImg");
    document.getElementById("imgFemale").style.backgroundImage = candidateFem;
  }
  else{
    document.getElementById("imgFemale").style.backgroundImage = 'url(../assets/img/user_default.png)';
  }
  

  if (sessionStorage.getItem("maleImg") != null) {
    var candidateMale = sessionStorage.getItem("maleImg");
    document.getElementById("imgMale").style.backgroundImage = candidateMale;
  }
  else{
    document.getElementById("imgMale").style.backgroundImage = 'url(../assets/img/user_default.png)';
  }
  
}

function checkVotes(){


  if (sessionStorage.getItem("voteFemale") != null &&
   sessionStorage.getItem("voteMale") != null ){

    $('#castButton').html('<h2 class="title text-center mt-1 mb-0">Notice</h2><p class="text-center description">Clicking the cast button below means you are sure withyour choice, this action will not be reverted once executed</p><div class="col-lg-8 m-auto"><button id="castVotes" class="btn btn-block btn-primary" onclick="castVotes();">Cast Votes</button></div>');


  }
  else{
    $('#castButton').html('<h2 class="title text-center mt-1 mb-0">Notice</h2><p class="text-center description">You have not yet voted for any of the candidates.<br/>Make sure you voted for both Mr & Miss of your choice</p><div class="col-lg-8 m-auto"><button id="castVotes" class="btn btn-block btn-default" data-toggle="tooltip" data-placement="top" title="Cannot do that.">Cast Votes</button></div>');
  }

}

function castVotes(){

  Snackbar.show({
       text: 'Are you sure with your Choice?',
       actionText: 'Yes',
       pos: 'top-right',
       onActionClick: function(element) {
           //Set opacity of element to 0 to close Snackbar 
           $(element).css('opacity', 0);
           
      var userID = sessionStorage.getItem("userID");
      var userFN = sessionStorage.getItem("userFN");
      var userCol = sessionStorage.getItem("userCol");
      var votedMale = sessionStorage.getItem("voteMale");
      var votedFemale = sessionStorage.getItem("voteFemale");

       
      $.ajax({
        type: "POST",
        url : "./backend/castVotes.php?",
        data: {
          action     :"cast",
          userID     :userID,
          userFN     :userFN,
          userCol    :userCol,
          votedMale  :votedMale,
          votedFemale :votedFemale

        },
        success: function (data){

          
          if(data == "1"){
          //voted successfully
          sessionStorage.clear();
          window.location.replace("../peopleschoice/"); 
          }
          else if(data == "0"){

            Snackbar.show({
               text: 'A problem has accured! Please seek for authorized assistance',
               actionTextColor: '#ff0000',
               actionText: 'Refresh',
               pos: 'top-right',
               onActionClick: function(element) {
                   //Set opacity of element to 0 to close Snackbar 
                   $(element).css('opacity', 0);
                   location.reload();
               }
            });
          }
          else if(data == "1"){


            Snackbar.show({
               text: 'A problem has accured, No response from Server',
               actionTextColor: '#ff0000',
               actionText: 'Refresh',
               pos: 'top-right',
               onActionClick: function(element) {
                   //Set opacity of element to 0 to close Snackbar 
                   $(element).css('opacity', 0);
                   location.reload();
               }
            });

          }
          else{
            alert("error: "+data);
            Snackbar.show({
               text: 'A problem has accured, No response from Server',
               actionTextColor: 'tomato',
               actionText: 'Refresh',
               pos: 'top-right',
               onActionClick: function(element) {
                   //Set opacity of element to 0 to close Snackbar 
                   $(element).css('opacity', 0);
                   location.reload();
               }
            });
          }

        },
        failed: function (data){

          Snackbar.show({
               text: 'A problem has accured!',
               actionTextColor: '#ff0000',
               actionText: 'Refresh',
               pos: 'top-right',
               onActionClick: function(element) {
                   //Set opacity of element to 0 to close Snackbar 
                   $(element).css('opacity', 0);
                   location.reload();
               }
            });
        }
    });

      
       }
    });
}
