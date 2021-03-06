var additem = document.getElementById("additem");
var signup = document.getElementById("signup");
var logoutbtn = document.getElementById("logoutbtn");
var loginbtn = document.getElementById("loginbtn");
var signupbtn = document.getElementById("signupbtn");

logoutbtn.addEventListener('click', function() {
  window.location.replace("index.php");
localStorage.clear();
 /*  loginbtn.style.display = "block";
  additem.style.display = "none";
  logoutbtn.style.display = "none"; */

});
additem.addEventListener('click', function() {
window.location.replace("additem.php");
  var logoutbtn = document.getElementById("logoutbtn");
  logoutbtn.style.display = "block";

});

signup.addEventListener('click', function () {
  fnsignup1();
  let jsonstring = JSON.stringify(jsonobj);
  postData(jsonstring, 'database.php');

}); 


var login = document.getElementById("login2");
login.addEventListener('click', async function () {
  fnlogin1();
  let jslogin = JSON.stringify(jslogobj);
  let j = await postData(jslogin, 'login.php');
  console.log(j);
  console.log(j[3]);
  if (j !== null) {
    logoutbtn.style.display = "block";
    if (j[3] == 1) {
      additem.style.display = "block";
        }
        localStorage.setItem("fullname",j[0]+" "+j[1]);
        localStorage.setItem("usrname", j[2]);
       
    loginbtn.style.display = "none";
    signupbtn.style.display = "none";
  }
  else {
    loginbtn.style.display = "block";
  }
});



async function postData(data, url) {
  const response = await fetch(url, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: data
  });
  return response.json();
}

var jsonobj;

function fnsignup1() {
  let fname = document.getElementById("fname").value;
  let lname = document.getElementById("lname").value;
  let phno = document.getElementById("phno").value;
  let email = document.getElementById("email").value;
  let uname = document.getElementById("uname").value;
  let pwrd = document.getElementById("pwrd").value;
  let staff = false;
  if (document.getElementById("staff").checked) {
    staff = true;
  }
  jsonobj = {
    'fname': fname,
    'lname': lname,
    'phno': phno,
    'email': email,
    'uname': uname,
    'pwrd': pwrd,
    'staff': staff,
  }


  document.getElementById("regdialog").close();
}


var jslogobj;
function fnlogin1() {
  let luname = document.getElementById("lusername").value;
  let lpwrd = document.getElementById("lpwrd").value;
  jslogobj = {
    'luname': luname,
    'lpwrd': lpwrd,
  }
  document.getElementById("myDialog").close();
}

