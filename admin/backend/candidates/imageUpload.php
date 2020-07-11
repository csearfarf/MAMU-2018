<?php

/* Getting file name */
$filename = $_FILES['file']['name'];
$candidateName= $_POST['candidateName']; //get candidate name

   $candidateName=$_POST['candidateName'];
   $valid_extensions = array('jpeg', 'jpg', 'png', 'gif', 'svg'); // valid extensions
   $filepath = 'uploads/';
   $img = $_FILES['file']['name'];
   $tmp = $_FILES['file']['tmp_name'];

   list($txt, $ext) = explode(".", $img); // alternative $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));

   $image_name = $candidateName.".".$ext;// assigns image name based on time -> feel free to modify, according to needs

   // Validate File extension
   if(in_array($ext, $valid_extensions))
   {
      $filepath=$filepath.$image_name;


      if(move_uploaded_file($tmp,$filepath)){
          echo 1; // success upload
      }else{
         echo 0; //Failed to upload image on server
      }
   }else
   {
      echo 2;//'Please upload valid image'
   }




?>