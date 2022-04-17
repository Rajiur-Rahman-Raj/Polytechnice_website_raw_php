 var pwd = document.getElementById("pass");
 var new_pwd = document.getElementById("new_pass");
 var con_pwd = document.getElementById("con_pass");

 document.getElementById('eye').addEventListener('click',pass_fun);

 function pass_fun(){
 	if(pwd.type == "password"){
 		pwd.type ="text";
 		this.setAttribute('style', 'color:green');
 	}else{
 		pwd.type = "password";
 		this.setAttribute('style', 'color:#666;');
 	}
 }

 document.getElementById('new_eye').addEventListener('click',new_pass_fun);

 function new_pass_fun(){
 	if(new_pwd.type == "password"){
 		new_pwd.type ="text";
 		this.setAttribute('style', 'color:red;margin-left:-35px');
 	}else{
 		new_pwd.type = "password";
 		this.setAttribute('style', 'color:#666; margin-left:-35px');
 	}
 }

 document.getElementById('new_eye').addEventListener('click',new_pass_fun);

 function new_pass_fun(){
 	if(new_pwd.type == "password"){
 		new_pwd.type ="text";
 		this.setAttribute('style', 'color:red;margin-left:-35px');
 	}else{
 		new_pwd.type = "password";
 		this.setAttribute('style', 'color:#666; margin-left:-35px');
 	}
 }



