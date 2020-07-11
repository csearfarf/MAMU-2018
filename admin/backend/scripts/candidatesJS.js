
    $(document).ready(function() {

  var table = jQuery('#candidates').dataTable({
     responsive: true,
     
    buttons: [
            { extend: 'colvis', className: 'btn btn-sm m-1' },
            { extend: 'copy', className: 'btn btn-sm m-1',
                          exportOptions: {
                          columns: [ 0, 1, 2,3,4] } },
            { extend: 'csvHtml5', className: 'btn btn-sm m-1',
                          exportOptions: {
                          columns: [  0, 1, 2,3,4] } },
            { extend: 'excelHtml5', className: 'btn btn-sm m-1',
                          exportOptions: {
                          columns: [  0, 1, 2,3,4] } },
            { extend: 'print', className: 'btn btn-sm m-1',
                          exportOptions: {
                          columns: [  0, 1, 2,3,4] } }
                ],

      "dom": '<"container"<"row clearfix p-3"<"col-md-4"l><"col-md-4 btn-group"><"col-md-4"f>>><"container"<"row clearfix p-3"<"col-md-12 btn-group"B>>><"container"<"row clearfix p-3"<"col-md-12"rt>>><"container"<"row"<"col-md-3"><"col-md-6"p><"col-md-3">>><"container"<"row p-3"<"col-md-12 btn-group"i>>>',
       "bProcessing": true,
       "sAjaxSource": "./backend/candidates/loadCandidates.php",
        "bPaginate":true,
        "sPaginationType":"full_numbers",
        "iDisplayLength": 5,
       "aoColumns": [

          { mData: 'image' } ,
          { mData: 'candidate_number' } ,
          { mData: 'name' },
          { mData: 'gender' },
          { mData: 'abbr' },
          { mData: 'btn', orderable: false, searchable: false }
      
      ]
  });  


  });   

  
  function changePic(){
      $("#imageFileE").trigger('click');
  }



    function readURL(input) {

                       if (input.files && input.files[0]) {
                           var reader = new FileReader();

                           reader.onload = function (e) {
                               $('#imaheEdit').attr('src', e.target.result);
                           }

                           reader.readAsDataURL(input.files[0]);
                       }
                   }

                   $("#imageFileE").change(function () {
                       readURL(this);
                   });

  function createsave(){
   var candidateNumber=$('#candidateNumber').val();
    var name=$('#name').val();
    var genderType=$('#genderType').val();
    var collegeType=$('#collegeType').val();
    var tempImageName  =document.getElementById("imageFile").files[0].name;
    var imageExt = tempImageName.split('.').pop();
    var candidateImage=name+'.'+imageExt;

 if(candidateImage!=""){

  var fd = new FormData();
    var files = $('#imageFile')[0].files[0];
    fd.append('file',files);
    fd.append('candidateName',name);


        $.ajax({
            url: './backend/candidates/imageUpload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
             
             if(response==1){ //SUCCESS IMAGE UPLOAD

               if (candidateNumber!="" && name!="" && genderType!="" && collegeType!="" && candidateImage!="") {

             $.ajax({
            url: "./backend/candidates/addCandidate.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {candidateNumber:candidateNumber,name:name,genderType:genderType,collegeType:collegeType,candidateImage:candidateImage}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                    if(data ==1){

                alert('Successfully Created')
                $('#candidates').DataTable().ajax.reload();//reload table
                $('#formCreate')[0].reset();// reset form
                $('#createCandidate').modal('hide'); // hide          
              




                }else if (data==0){
                  alert('Candidate Name already exist !');
                }
              
              }

          });


    }
   




             }else if (response==0){
              alert("Failed to upload image on server");
             }else{
              alert("Please upload valid image");

             }
            },
        });

 }else{
  alert("Please Select image");
 }
    
  }


   function deleteAccount(id){

   if (confirm("Delete Selected account ? ")) {
   var id=id;
   if (id!="" && id!=null) {
       $.ajax({
            url: "./backend/candidates/deleteCandidate.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data==1){
                alert('Successfully Deleted')
                $('#candidates').DataTable().ajax.reload();//reload table
                }
              
              }

          });


    }

    } else {
     

    }
  }

 function editAccount(id){
  var id =id;
   if (id!="") {
       $.ajax({
            url: "./backend/candidates/loadSelectedCandidate.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'json',
              success: function(data)   // A function to be called if request succeeds
              {

                $('#eid').val(data[0]['candidate_id']); // candidate id
                $('#ecandidateNumber').val(data[0]['candidate_number']);
                $('#ename').val(data[0]['name']);
                $('#egenderType').val(data[0]['gender']);

                var eid=data[0]['candidate_id'];
                $('#ecollegeType').val(data[0]['id']); // college id
                document.getElementById("imaheEdit").src=document.getElementById("candidateImahe"+eid).src;

                $('#editCandidate').modal('show');
              }

          });
    }
  }

  function editSave(){
    var id=$('#eid').val();
    var ecandidateNumber=$('#ecandidateNumber').val();
    var ename=$('#ename').val();
    var egenderType=$('#egenderType').val();
    var ecollegeType=$('#ecollegeType').val();

    var tempImageName  =document.getElementById("imageFileE").files[0].name;
    var imageExt = tempImageName.split('.').pop();
    var candidateImage=ename+'.'+imageExt;



 if(candidateImage!=""){

  var fd = new FormData();
    var files = $('#imageFileE')[0].files[0];
    fd.append('file',files);
    fd.append('candidateName',ename);


        $.ajax({
            url: './backend/candidates/imageUpload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
             
             if(response==1){ //SUCCESS IMAGE UPLOAD

             if (candidateImage!="" && id!=""&& ecandidateNumber!="" && ename!="" && egenderType!="" && ecollegeType!="" || id!=null && ecandidateNumber!=null && ename!=null && egenderType!=null && ecollegeType!=null && candidateImage!=null) {

          $.ajax({
            url: "./backend/candidates/editSaveCandidate.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id,ecandidateNumber:ecandidateNumber,ename:ename,egenderType:egenderType,ecollegeType:ecollegeType,candidateImage:candidateImage}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data ==1){
                alert('Successfully Updated')
                document.getElementById("candidateImahe"+id).src=document.getElementById("candidateImahe"+id).src+ new Date().getTime();
                $('#candidates').DataTable().ajax.reload();//reload table
                $('#formEdit')[0].reset();// reset form
                $('#editCandidate').modal('hide'); // hide
                }
              }

          });


    }
   




             }else if (response==0){
              alert("Failed to upload image on server");
             }else{
              alert("Please upload valid image");

             }
            },
        });

 }else{
  alert("Please Select image");
 }

    

  
  }