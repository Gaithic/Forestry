function loginvalidateform(){
    const name = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if(name==''){
        document.getElementById('emailError').innerHTML= "Email is required";
        return false;
    }

    if(password==''){
        document.getElementById('passwordError').innerHTML= "Password is required";
        return false;
    }

}