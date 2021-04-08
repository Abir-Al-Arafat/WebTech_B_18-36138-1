<script>

        function validateForm(){  
		var name=document.loginform.username.value;  
		var password=document.loginform.password.value;  
		  
		if (name==null || name==""){  
		  alert("Name can't be blank");  
		  return false;  
		}else if (password==null||password=="") {
			alert("Password can't be blank");
			return false;
		}else if(password.length<4){  
		  alert("Password must be at least 4 characters long.");  
		  return false;  
		  }  
		}

        function checkName() {
			if (document.getElementById("username").value == "") {
			  	document.getElementById("nameErr").innerHTML = "Name can't be blank";
			  	document.getElementById("nameErr").style.color = "red";
			  	document.getElementById("username").style.borderColor = "red";
			}else{
			  	document.getElementById("nameErr").innerHTML = "";
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
     
</script>