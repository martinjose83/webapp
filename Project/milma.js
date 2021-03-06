
var menuB1 = document.getElementById("menuB1");
menuB1.style.display = "none";
var menuA = document.getElementById("menus");
menuA.style.display = "none";
var logoutbtn = document.getElementById("logoutbtn");
logoutbtn.style.display = "none";
var additem = document.getElementById("additem");
additem.style.display = "none";


function openSubmenu(sub) {
  if (sub.style.display === "none") {
    sub.style.display = "block";
  } else {
    sub.style.display = "none";
  }
}
function closedilog(){
 window.location.replace("index.php");

}
function shopnow() {
  window.location.replace("shop.php");
}
function fnlogin() {
  document.getElementById("myDialog").showModal();
  
}

function fnsignup() {
  document.getElementById("regdialog").show();
  /* loginbtn.style.display = "none"; */
}

