function logout(){

  window.location.replace("../");
}
function displayCandidates() {


    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "../backend/displayCandidates.php?", false);
    xmlhttp.send(null);

    document.getElementById("candidatesDiv").innerHTML = xmlhttp.responseText;


}
