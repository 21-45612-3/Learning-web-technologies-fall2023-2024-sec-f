
function regval() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;
    let role = document.getElementById("role").value;

    
    
    if (name == ""  && email == "" && password == "" && role == "") {
      document.getElementById("nameerror").innerHTML = "Name can not be empty";
      document.getElementById("emailrror").innerHTML = "Email can not be empty";
      document.getElementById("pwrror").innerHTML = "Password can not be empty";
      document.getElementById("rolerror").innerHTML = "Role is either buyer or seller";
      return false;
  
    }
    

      else if(password.length < 4){

        document.getElementById("pwerror").innerHTML = "Pasword must be at least 4 character";
        return false;
      }
      else if(role == 'buyer' || role != 'seller'){

        document.getElementById("role").innerHTML = "role must be either buyer or seller";
        return false;
      }

    
    }

    function login(){


        let name = document.getElementById("sname").value;
    let password = document.getElementById("spw").value;
    let role = document.getElementById("srole").value;


    if(name == "" || password == "" || role == "" ){
        document.getElementById("snameerror").innerHTML = "Name can not be empty";
        document.getElementById("spwerror").innerHTML = "Password can not be empty";
        document.getElementById("sroleerror").innerHTML = "role must be either buyer or seller";
    }}

    
  