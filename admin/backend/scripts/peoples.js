
    $(document).ready(function() {

  var table = jQuery('#talents').dataTable({
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
       "sAjaxSource": "./backend/peoples/loadPeoples.php",
        "bPaginate":true,
        "sPaginationType":"full_numbers",
        "iDisplayLength": 50,
       "aoColumns": [
          { mData: 'candidate_number' } ,
          { mData: 'name' },
          { mData: 'gender' },
          { mData: 'total' },
          { mData: 'btn', orderable: false, searchable: false }
      
      ]
  });  


  });   

  
  function selectCandidate(id){
    var candidateID=id;
  
   if (candidateID!="" ) {

       $.ajax({
            url: "./backend/talents/setCandidate.php", // Url to which the request is send
              type: "POST",             // Type of request to be send, called as method
              data: {candidateID:candidateID}, // Data sent to server, a set of key/value pairs (i.e. form fields and values)
              dataType: 'html',
              success: function(data)   // A function to be called if request succeeds
              {
                if(data ==1){

                  window.location.href = "./peoplesChoiceCandidate.php";
                }else if (data==0){
                }
              
              }

          });


    }
 


  }



