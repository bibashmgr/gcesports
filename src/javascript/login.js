// --------------- //
// form-validation //
// --------------- //

const form = document.getElementById('form');
const email = document.getElementById('email');
const password = document.getElementById('password');


form.addEventListener('submit', (event) =>{
    event.preventDefault();

    // a function to check whether the inputs are valid or not
    checkInputs();
});

function checkInputs(){
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    // validating email
    if(emailValue===""){
        setErrorMsg(email , "Email cannot be blank");
    } else if(emailValue.match(mailformat)){
        setSuccessMsg(email);
    } else {
        setErrorMsg(email , "Invalid Email");
    }

    // validating password
    if(passwordValue===""){
        setErrorMsg(password , "Password cannot be blank");
    } else if(passwordValue.length <= 5){
        setErrorMsg(password , "Minimum 6 characters long");
    } 
    else if(passwordValue.length > 20){
        setErrorMsg(password , "Maximum 20 characters long");
    } else {
        setSuccessMsg(password);
    }
}

function setErrorMsg(input,message){
    const formControl = input.parentElement;
    const smallMsg = formControl.querySelector('small');

    smallMsg.innerText = message;

    formControl.className = "form-control error" ;
    
}

function setSuccessMsg(input){
    const formControl = input.parentElement;

    formControl.className = "form-control success" ;
    
}
