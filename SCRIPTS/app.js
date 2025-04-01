
let password = document.getElementById('current-password');
let eyeicon = document.getElementById('eye-icon');

let cnfPassword = document.getElementById('confirm-password');
let eyeTwo = document.getElementById('eye-two');








eyeicon.onclick = function(){


    if(password.type === "password"){
        password.type = "text";
       eyeicon.src = "../IMG/visual.png";
 
 
     }
     else
     {
         password.type = 'password';
         eyeicon.src = "../IMG/hide.png";
     }
}


eyeTwo.onclick = function(){

    if(cnfPassword.type === "password"){
        cnfPassword.type = "text";
       eyeTwo.src = "../IMG/visual.png";
 
 
     }
     else
     {
         cnfPassword.type = 'password';
         eyeTwo.src = "../IMG/hide.png";
     }
}
