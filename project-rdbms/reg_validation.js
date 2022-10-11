//form validation fn();for password and name ,email
function validateForm() {
    var x = document.forms["form1"]["username"].value;
    if (x == "" || x == null) {
      alert("Username must be filled out");
     return false;
    }
  
    var y = document.forms["form1"]["password"].value;
    var z = document.forms["form1"]["confirm_password"].value;
    if(y!=z){
      alert("Enter same password");
      return false;
    }
  
  
    var x = document.forms["form1"]["email"].value;
    if (x == "" || x == null) {
      alert("Email must be filled out");
     return false;
    }
    else{alert ("Welcome!!! \n Please Login !!!");}
  }
 