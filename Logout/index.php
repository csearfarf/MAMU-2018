<?php
session_start();
if(isset($_SESSION['id']) == ""){

    session_destroy ();
    
}
else{

    session_destroy ();
}

?>
<script>
window.onload = logout();

function logout(){

window.location.replace("../");
}
</script>