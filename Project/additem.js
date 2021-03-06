var additem2 = document.getElementById("additem");

var logoutbtn = document.getElementById("logoutbtn");


logoutbtn.addEventListener('click', function() {
  window.location.replace("index.php");
  localStorage.clear();

});
/* additem2.addEventListener('click', function() {
readToJason();
 let jsonsadditem = JSON.stringify(jsonitem);
  postData(jsonsadditem, 'additem1.php');
  
}); */







var usrname= localStorage.getItem("usrname"); 

var x = document.getElementById(additem2);


if(usrname==null){
   window.location.replace("index.php");
}
/* function clearStorage() {

   

        localStorage.clear();

} */



