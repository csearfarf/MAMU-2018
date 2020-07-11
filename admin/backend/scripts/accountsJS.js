 $(document).ready(function() {

  var table = jQuery('#accounts').dataTable({
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
       "sAjaxSource": "./backend/accounts/loadAccounts.php",
        "bPaginate":true,
        "sPaginationType":"full_numbers",
        "iDisplayLength": 5,
       "aoColumns": [
          { mData: 'name' } ,
          { mData: 'username' },
          { mData: 'password' },
          { mData: 'type' },
          { mData: 'btn', orderable: false, searchable: false }
      
      ]
  });  


  });   

  
  function createsave(){
    var name=$('#name').val();
    var username=$('#username').val();
    var password=$('#password').val();
    var type=$('#type').val();
  
   if (name!="" && username!="" && password!="" && type!="") {

       $.ajax({
            url: "./backend/accounts/addAccount.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {name:name,username:username,password:password,type:type}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data ==1){
                alert('Successfully Created')
                $('#accounts').DataTable().ajax.reload();//reload table
                $('#formCreate')[0].reset();// reset form
                $('#createAccount').modal('hide'); // hide

                }else if (data==0){
                  alert('Username already taken');
                }
              
              }

          });


    }
 


  }


   function deleteAccount(id){

   if (confirm("Delete Selected account ? ")) {
   var id=id;
   if (id!="" && id!=null) {
       $.ajax({
            url: "./backend/accounts/deleteAccount.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data==1){
                alert('Successfully Deleted')
                $('#accounts').DataTable().ajax.reload();//reload table
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
            url: "./backend/accounts/loadSelectedAccount.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'json',
              success: function(data)   // A function to be called if request succeeds
              {
                $('#eid').val(data[0]['id']);
                $('#ename').val(data[0]['name']);
                $('#eusername').val(data[0]['username']);
                $('#epassword').val(data[0]['password']);
                $('#etype').val(data[0]['type']);

                 $('#editAccountModal').modal('show');
              }

          });
    }
  }

  function editSave(){
    var id=$('#eid').val();
    var name=$('#ename').val();
    var username=$('#eusername').val();
    var password=$('#epassword').val();
    var type=$('#etype').val();
    

   if (id!=""&& name!="" && username!="" && password!="" && type!="" || id!=null && name!=null && username!=null && password!=null && type!=null) {

       $.ajax({
            url: "./backend/accounts/editSaveAccount.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {id:id,name:name,username:username,password:password,type:type}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data ==1){
                alert('Successfully Updated')

                $('#accounts').DataTable().ajax.reload();//reload table
                $('#formEdit')[0].reset();// reset form
                $('#editAccountModal').modal('hide'); // hide
                }
              }

          });


    }
  }