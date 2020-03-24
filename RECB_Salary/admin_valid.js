var userBox=document.querySelector('#admin_id');
var userBox1=document.querySelector('#admin_pass');

var usernameError=document.querySelector('#text_error');
var usernameError1=document.querySelector('#text_error1');

userBox.addEventListener('blur',eventUser);
userBox1.addEventListener('blur',eventUser1);

function validForm() {
    var result=true;
    if(userBox.value===''){
        userBox.style.borderBottomColor='red';
        usernameError.textContent='Please enter your ADMIN ID';
        usernameError.style.color='red';

        result=false;
        return result;
    }

    else if(userBox.value!=='recbanda@734'){
        userBox.style.borderBottomColor='red';
        usernameError.textContent='ADMIN ID IS INCORRECT';
        usernameError.style.color='red';

        result=false;
        return result;
    }
    if(userBox1.value===''){
        userBox1.style.borderBottomColor='red';
        usernameError1.textContent='Please enter your ADMIN PASSWORD';
        usernameError1.style.color='red';

        result=false;
        return result;
    }

    else if(userBox1.value!=='recbanda@734'){
        userBox1.style.borderBottomColor='red';
        usernameError1.textContent='ADMIN PASSWORD IS INCORRECT';
        usernameError1.style.color='red';

        result=false;
        return result;
    }
    else if (result===false){
        return false;
    }
    else {

        return true;
    }


    // var result=true;
    // if(userBox1.value===''){
    //     userBox1.style.borderBottomColor='red';
    //     usernameError1.textContent='Please enter your ADMIN PASSWORD';
    //     usernameError1.style.color='red';
    //
    //     result=false;
    //     return result;
    // }
    //
    // else if(userBox1.value!=='recbanda@734'){
    //     userBox1.style.borderBottomColor='red';
    //     usernameError1.textContent='ADMIN PASSWORD IS INCORRECT';
    //     usernameError1.style.color='red';
    //
    //     result=false;
    //     return result;
    // }
    // else if (result===false){
    //     return false;
    // }
    // else {
    //
    //     return true;
    // }

}

function eventUser() {
    userBox.style.borderBottomColor='#1d7b9f';
    usernameError.textContent='';


}

function eventUser1() {
    userBox1.style.borderBottomColor='#1d7b9f';
    usernameError1.textContent='';

}
