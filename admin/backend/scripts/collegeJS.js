
    $(document).ready(function() {

  var table = jQuery('#college').dataTable({
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
       "sAjaxSource": "./backend/college/loadCollege.php",
        "bPaginate":true,
        "sPaginationType":"full_numbers",
        "iDisplayLength": 5,
       "aoColumns": [
          { mData: 'college_name' } ,
          { mData: 'abbr' },
          { mData: 'btn', orderable: false, searchable: false }
      
      ]
  });  


  });   

  
  function createsave(){
    var collegename=$('#collegeName').val();
    var abbr=$('#abbr').val();
  
   if (collegename!="" && abbr!="" ) {

       $.ajax({
            url: "./backend/college/addCollege.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {collegename:collegename,abbr:abbr}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data ==1){
                alert('Successfully Created')
                $('#college').DataTable().ajax.reload();//reload table
                $('#formCreate')[0].reset();// reset form
                $('#createCollege').modal('hide'); // hide

                }else if (data==0){
                  alert('College Already Exist');
                }
              
              }

          });


    }
 


  }


   function deleteSelectedCollege(id){

   if (confirm("Delete Selected College ? ")) {
   var id=id;
   if (id!="" && id!=null) {
       $.ajax({
            url: "./backend/college/deleteCollege.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data==1){
                alert('Successfully Deleted')
                $('#college').DataTable().ajax.reload();//reload table
                }
              
              }

          });


    }

    } else {
     

    }
  }

 function editSelectedCollege(id){
  var id =id;
   if (id!="") {
       $.ajax({
            url: "./backend/college/loadSelectedCollege.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'json',
              success: function(data)   // A function to be called if request succeeds
              {
                $('#eid').val(data[0]['id']);
                $('#ecollegeName').val(data[0]['college_name']);
                $('#eabbr').val(data[0]['abbr']);

                $('#editCollege').modal('show');
              }

          });
    }
  }

  function editSave(){
    var id=$('#eid').val();
    var collegeName=$('#ecollegeName').val();
    var abbr=$('#eabbr').val();

   if (id!=""&& collegeName!="" && abbr!="" || id!=null && collegeName!=null && abbr!=null ) {

       $.ajax({
            url: "./backend/college/editSaveCollege.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id,collegeName:collegeName,abbr:abbr}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data ==1){
                alert('Successfully Updated')
                $('#college').DataTable().ajax.reload();//reload table
                $('#formEdit')[0].reset();// reset form
                $('#editCollege').modal('hide'); // hide
                }
              }

          });


    }
  }