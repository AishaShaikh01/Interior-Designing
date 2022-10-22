function checkpass(){
var pass = document.getElementById("ps").value;
var repass = document.getElementById("rps").value;

if(pass != repass) {
    alert("password should be same");
    window.location.href = "../phpfile/change-password.php";
    
}
}