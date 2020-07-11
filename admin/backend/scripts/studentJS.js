
    $(document).ready(function() {

  var table = jQuery('#student').dataTable({
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
       "sAjaxSource": "./backend/students/loadStudents.php",
        "bPaginate":true,
        "sPaginationType":"full_numbers",
        "iDisplayLength": 5,
       "aoColumns": [

          { mData: 'student_number' } ,
          { mData: 'name' },
          { mData: 'abbr' },
          { mData: 'registered' },
          { mData: 'btn', orderable: false, searchable: false }
      
      ]
  });  


  });   

  
  function createsave(){
    var studentNumber=$('#studentNumber').val();
    var name=$('#name').val();
    var collegeType=$('#collegeType').val();
  
   if (studentNumber!="" && name!="" && collegeType!="" ) {

       $.ajax({
            url: "./backend/students/addStudent.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {studentNumber:studentNumber,name:name,collegeType:collegeType}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data ==1){
                alert('Successfully Created')
                $('#student').DataTable().ajax.reload();//reload table
                $('#formCreate')[0].reset();// reset form
                $('#createStudent').modal('hide'); // hide

                }else if (data==0){
                  alert('Student Name already exist !');
                }
              
              }

          });


    }
 


  }


   function deleteStudent(id){

   if (confirm("Delete Selected account ? ")) {
   var id=id;
   if (id!="" && id!=null) {
       $.ajax({
            url: "./backend/students/deleteStudent.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data==1){
                alert('Successfully Deleted')
                $('#student').DataTable().ajax.reload();//reload table
                }
              
              }

          });


    }

    } else {
     

    }
  }

 function editStudent(id){
  var id =id;
   if (id!="") {
       $.ajax({
            url: "./backend/students/loadSelectedStudent.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'json',
              success: function(data)   // A function to be called if request succeeds
              {

                              

                $('#eid').val(data[0]['student_id']); // candidate id
                $('#estudentNumber').val(data[0]['student_number']);
                $('#ename').val(data[0]['name']);
                $('#ecollegeType').val(data[0]['college_id']); // college id
           

                $('#editStudents').modal('show');
              }

          });
    }
  }

  function editSave(){
    var id=$('#eid').val();
    var estudentNumber=$('#estudentNumber').val();
    var ename=$('#ename').val();
    var ecollegeType=$('#ecollegeType').val();
    

   if (id!=""&& estudentNumber!="" && ename!="" && ecollegeType!="" || id!=null && estudentNumber!=null && ename!=null  && ecollegeType!=null) {

       $.ajax({
            url: "./backend/students/editSaveStudent.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id,estudentNumber:estudentNumber,ename:ename,ecollegeType:ecollegeType}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data ==1){
                alert('Successfully Updated')

                $('#student').DataTable().ajax.reload();//reload table
                $('#formEdit')[0].reset();// reset form
                $('#editStudents').modal('hide'); // hide
                }
              }

          });


    }
  }