

function checkLogin(){
    var email = document.getElementById('email0');
    var emailRegex =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})(\.[a-z{2,8}])?$/;
    var pwd = document.getElementById('pwd0').value;
    if(!emailRegex.test(email.value)){
        alert('Please provide a valid email address');
        email.focus;
        return false;
    }
    if(pwd.length<8){
        alert('Your password length must be greater than 7 ');
        return false;
    }
}

function checkSignup(){
    var email = document.getElementById('email');
    var emailRegex =/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})(\.[a-z{2,8}])?$/;
    var pwd = document.getElementById('pwd').value;
    var confirmPwd = document.getElementById('confirmPwd').value;
    if(!emailRegex.test(email.value)){
        alert('Please provide a valid email address');
        email.focus;
        return false;
    }
    if(pwd.length<8){
        alert('Your password length must be greater than 7 ');
        return false;
    }
    if(pwd != confirmPwd){
        alert('Please re-enter your password');
        focus.confirmPwd;
        return false;
    }
}