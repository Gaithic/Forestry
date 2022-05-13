function validateform(){
    const name = document.getElementById('name').value;
    const designation = document.getElementById('designation').value;
    const date_of_birth = document.getElementById('date_of_birth').value;
    const date_of_joining = document.getElementById('date_of_joining').value;
    const office = document.getElementById('office').value;
    const district = document.getElementById('district').value;
    const office_address = document.getElementById('office_address').value;
    const gender = document.getElementById('gender').value;
    const qualification = document.getElementById('qualification').value;
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const email = document.getElementById('email').value;
    const contact = document.getElementById('contact').value;





    if(name==''){
        document.getElementById('nameError').innerHTML= "Name is required";
        return false;
    }

    
    if(designation==''){
        document.getElementById('designationError').innerHTML= "Designation is required";
        return false;
    }

    if(date_of_birth==''){
        document.getElementById('dobError').innerHTML= "Date Of Birth is required";
        return false;
    }

    if(date_of_joining==''){
        document.getElementById('dojError').innerHTML= "Date of Joining is required";
        return false;
    }

    if(office==''){
        document.getElementById('addressError').innerHTML= "Office Name is required";
        return false;
    }


    if(district==''){
        document.getElementById('districtError').innerHTML= "District Name is required";
        return false;
    }


    if(office_address==''){
        document.getElementById('officeError').innerHTML= "Office Address is required";
        return false;
    }

    if(gender==''){
        document.getElementById('genderError').innerHTML= "Gender is required";
        return false;
    }

    if(qualification==''){
        document.getElementById('eduError').innerHTML= "Qualification field is required";
        return false;
        
    }

    if(username==''){
        document.getElementById('usernameError').innerHTML= "Username is required ";
        return false;
    }

    if(password==''){
        document.getElementById('passwordError').innerHTML= "Password is required";
        return false;
    }

    if(email==''){
        document.getElementById('emailError').innerHTML= "Email is required";
        return false;
        
    }

    if(contact==''){
        document.getElementById('contactError').innerHTML= "Contact is required";
        return false;
    }


    

    
}