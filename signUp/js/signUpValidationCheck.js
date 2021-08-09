const form = document.getElementById('form');
const username = document.getElementById('username');
const fullName = document.getElementById('fullName');
const email = document.getElementById('email');
const password = document.getElementById('password');
const password2 = document.getElementById('password2');
const terms = document.getElementById('agreeTnC');



form.addEventListener('submit', (event)=>{

    checkInput(event);

})


function checkInput(event) {
    // const usernameValue = username.value .trim();
    const fullNameValue = fullName.value .trim();
    const emailValue = email .value.trim();
    const passwordValue = password.value .trim();
    const password2Value = password2.value.trim();

    // if (usernameValue === '' ) {
    //     showError(username, 'Username cannot be blank.');
    //     event.preventDefault();

    // }
    // else if(!lengthCheck(usernameValue)){
    //     showError(username, 'Username too short');
    //     event.preventDefault();
    // }
    // else if(!validateUsername(usernameValue)){
    //     showError(username, 'Username contains illegal character');
    //     event.preventDefault();
    // }
    // else {
    //     showSuccess(username)
    // }
    if (fullNameValue === '' ) {
        showError(fullName, 'Full Name cannot be blank.');
        event.preventDefault();

    }
    else if(!lengthCheck(fullNameValue)){
        showError(fullName, 'Full Name too short');
        event.preventDefault();
    }
     else {
        showSuccess(fullName)
    }
    if (emailValue === '' ) {
        showError(email, 'Email cannot be blank.');
        event.preventDefault();
    }
    else if (!validateEmail(emailValue)){
         showError(email, 'Email not valid.');
        event.preventDefault();
    }
    else {
        showSuccess(email)
    }
    if (passwordValue === '' ) {
        showError(password, 'Password cannot be blank.');
        event.preventDefault();
    }
    else if(!lengthCheck(passwordValue)){
        showError(password, 'Password too short');
        event.preventDefault();
    }
    else {
        showSuccess(password)
    }
    if (password2Value === '' ) {
        showError(password2, 'Password cannot be blank.');
        event.preventDefault();
    }
    
    else if(passwordValue != password2Value){
        showError(password2, 'Passwords does not match');
        event.preventDefault();
    }
    else {
        showSuccess(password2)
    }

    if (terms.checked != true){
        event.preventDefault();
        alert ("Agree to the Terms and Conditions");
    }

}

function TnCTrigger() {
    document.getElementById('TnCLabel').style.color = "#000000";
    if (terms.checked!=true){
     document.getElementById('TnCLabel').style.color = "#696F79" ;
       
    }
    
}


function showError(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;

    formControl.className = 'formControl error';
}

function showSuccess(input) {
    const formControl = input.parentElement;
    formControl.className = 'formControl success';
    
}

function validateEmail(email) {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

function lengthCheck(input) {
    if  (input.length<8){
        return false;
    }
    else{
        return true;
    }
}

function validateUsername(usernameValue) {
    var illegalChars = /\W/;
    if (illegalChars.test(usernameValue)) {;
        return false;
    }
    return true;

}