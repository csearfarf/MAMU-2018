function user_login()
{

 var username=$("#tbUsername").val();
 var password=$("#tbPassword").val();
 if(username!="" && password!="")
 {
  $.ajax
  ({
  type:'post',
  url:'./Login/backend/userLogin.php',
  data:{
  login:"login",
  username:username,
  password:password
  },
  success:function(response) {

  if(response === "success0"){
    window.location.replace("admin/");
  }
  else if(response === "success1"){

    if (confirm("Vote now for Coronation ?")){
    window.location.replace("Coronation/");// coronation
    //window.location.replace("Judges/"); talents
    }
  }
  else if(response === "fail"){
    Snackbar.show({
      actionTextColor: '#D59B46',
      text: 'Invalid Credentials, please try again',
      pos: 'top-center'
    });
  }
  else{
    Snackbar.show({
      actionTextColor: '#D59B46',
      text: 'Something went wrong please refresh the page',
      actionText: 'Refresh',
      pos: 'top-center',
      onActionClick: function(element) {
       //Set opacity of element to 0 to close Snackbar
       $(element).css('opacity', 0);
       alert('refresh page'); //code to refresh the page
   }
    });
  }
  }
  });
 }

 else if(username === "" && password === ""){

   Snackbar.show({
     actionTextColor: '#D59B46',
     text: 'Username cannot be Empty',
     pos: 'top-center',
     actionText: 'Okay',
     onActionClick: function(element) {
       //Set opacity of element to 0 to close Snackbar
       $(element).css('opacity', 0);
        $("#tbUsername").focus();
   }
   });
 }
 else if(username === "")
 {
  $("#tbUsername").focus();
   Snackbar.show({
     actionTextColor: '#D59B46',
     text: 'Username cannot be Empty',
     pos: 'top-center',
     actionText: 'Okay',
     onActionClick: function(element) {
       //Set opacity of element to 0 to close Snackbar
       $(element).css('opacity', 0);
        $("#tbUsername").focus();
   }
   });
 }
 else if(password === ""){

   $("#tbPassword").focus();
   Snackbar.show({
     actionTextColor: '#D59B46',
     text: 'Password cannot be Empty',
     pos: 'top-center',
     actionText: 'Okay',
     onActionClick: function(element) {
       //Set opacity of element to 0 to close Snackbar
       $(element).css('opacity', 0);
        $("#tbPassword").focus();
   }
   });
 }

 return false;
}
