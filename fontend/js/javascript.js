 var pwd = document.getElementById("pass");
 var new_pwd = document.getElementById("new_pass");
 var con_pwd = document.getElementById("con_pass");

 document.getElementById('eye').addEventListener('click',pass_fun);

 function pass_fun(){
 	if(pwd.type == "password"){
 		pwd.type ="text";
 		this.setAttribute('style', 'color:red;margin-left:-35px');
 	}else{
 		pwd.type = "password";
 		this.setAttribute('style', 'color:#666; margin-left:-35px');
 	}
 }

 document.getElementById('new_con_eye').addEventListener('click',new_con_pass_fun);

 function new_con_pass_fun(){
 	if(con_pwd.type == "password"){
 		con_pwd.type ="text";
 		this.setAttribute('style', 'color:red;margin-left:-35px');
 	}else{
 		con_pwd.type = "password";
 		this.setAttribute('style', 'color:#666; margin-left:-35px');
 	}
 }


