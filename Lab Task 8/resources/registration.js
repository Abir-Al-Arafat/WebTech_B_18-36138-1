<script>

        function validateForm(){  
		var name=document.loginform.name.value;  
		var email=document.loginform.email.value;  
		var username=document.loginform.username.value;  
		var password=document.loginform.password.value;  
		var conPassword=document.loginform.confirmpassword.value;  
		var gender=document.loginform.gender.value;  
		var dob=document.loginform.dateOfBirth.value;  
		  
		if (name==null || name==""){  
		  alert("Name cannot be blank");  
		  return false;  
		}else if(email==null||email==""){
            alert("E-mail cannot be blank");
            return false;
        }else if(username==null||username==""){
            alert("Username cannot be blank");
            return false;
        }
        else if (password==null||password=="") {
			alert("Password cannot be blank");
			return false;
		}else if(password.length<4){  
		  alert("Password must be at least 4 characters long.");  
		  return false;  
		  }else if(conPassword==null||conPassword==""){
            alert("re-type the same password again");
            return false;
        } else if(gender==null||gender==""){
            alert("choose a gender");
            return false;
        }else if(dob==null||dob==""){
            alert("Date of birth cannot be empty");
            return false;
        }   
		}

        function checkName() {
			if (document.getElementById("name").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("name").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
				document.getElementById("name").style.borderColor = "black";
			}			
        }

        function checkEmail() {
			if (document.getElementById("email").value == "") {
			  	document.getElementById("emailErr").innerHTML = "E-mail can't be blank";
			  	document.getElementById("emailErr").style.color = "red";
			  	document.getElementById("email").style.borderColor = "red";
			}else{
			  	document.getElementById("emailErr").innerHTML = "";
				document.getElementById("email").style.borderColor = "black";
			}			
        }

        function checkUN() {
			if (document.getElementById("username").value == "") {
			  	document.getElementById("unErr").innerHTML = "Username can't be blank";
			  	document.getElementById("unErr").style.color = "red";
			  	document.getElementById("username").style.borderColor = "red";
			}else{
			  	document.getElementById("unErr").innerHTML = "";
				document.getElementById("username").style.borderColor = "black";
			}			
        }

        function checkPass(){
        	if (document.getElementById("password").value == "") {
			  	document.getElementById("passErr").innerHTML = "Password can't be blank";
			  	document.getElementById("passErr").style.color = "red";
			  	document.getElementById("password").style.borderColor = "red";
			}else if(document.getElementById("password").value.length<4){
			  	document.getElementById("password").style.borderColor = "red";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("passErr").innerHTML = "Password must be at least 4 characters long.";
			}
			else{
				document.getElementById("passErr").innerHTML = "";
			  	document.getElementById("passErr").style.color = "red";
				document.getElementById("password").style.borderColor = "black";
			}
        }

        function checkPassC(){
        	if (document.getElementById("confirmpassword").value == "") {
			  	document.getElementById("passErrC").innerHTML = "Password can't be blank";
			  	document.getElementById("passErrC").style.color = "red";
			  	document.getElementById("confirmpassword").style.borderColor = "red";
			}else if(document.getElementById("confirmpassword").value.length<4){
			  	document.getElementById("confirmpassword").style.borderColor = "red";
			  	document.getElementById("passErrC").style.color = "red";
				document.getElementById("passErrC").innerHTML = "Password must be at least 4 characters long.";
			}
			else{
				document.getElementById("passErrC").innerHTML = "";
			  	document.getElementById("passErrC").style.color = "red";
				document.getElementById("confirmpassword").style.borderColor = "black";
			}
        }

        function dob() {
			if (document.getElementById("dateOfBirth").value == "") {
			  	document.getElementById("dobErr").innerHTML = "Date Of birth can't be blank";
			  	document.getElementById("dobErr").style.color = "red";
			  	document.getElementById("dateOfBirth").style.borderColor = "red";
			}else{
			  	document.getElementById("dobErr").innerHTML = "";
				document.getElementById("dateOfBirth").style.borderColor = "black";
			}			
        }
     
</script>