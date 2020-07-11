<?php
session_start();

session_destroy ();

?>

?>
<script>
window.onload = logout();

function logout(){

window.location.replace("../../../");
}
</script>