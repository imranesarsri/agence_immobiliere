let subBtn = document.getElementById("subBtSignIn")
let inpEmail = document.getElementById("inpEmail")
let inpPassword = document.getElementById("inpPassword")
let EmailError = document.getElementById("EmailError")
let PasswordError = document.getElementById("PasswordError")
let resultMessagPassw = document.getElementById("resultMessagPassw")
let resultMessagEmail = document.getElementById("resultMessagEmail")
let regexemail = new RegExp('^[a-zA-Z0-9.-]+[@]{1}[a-zA-Z0-9.-_]+[.]{1}[a-z]{2,}$','g');
let regexpassw = new RegExp('^[a-zA-Z0-9.-]+[0-9.-_#$%]');


//  onfocus
inpEmail.onfocus = function () {
    resultMessagEmail.innerHTML =""
    if(inpEmail.value.length == 0){
        inpEmail.style ="border-bottom: 2px solid #00C2FF"
        EmailError.innerHTML = "<p style='color:#7D7D7D'>Enter the correct email</p>"
        inpEmail.style.color ="#00C2FF"
    }
}
inpPassword.onfocus = function () {
    resultMessagPassw.innerHTML =""
    if(inpPassword.value.length == 0){
    inpPassword.style ="border-bottom: 2px solid #00C2FF"
    PasswordError.innerHTML =  "<p style='color:#7D7D7D'>Password greater than 8 characters</p> <p style='color:#7D7D7D'>Password Pssword consisting of number and letters</p>"
    inpPassword.style.color ="#00C2FF"
    }
}

// onblur
inpEmail.onblur = function () {
    if(inpEmail.value.length == 0){
        inpEmail.style ="border-bottom: 2px solid #7D7D7D"
    EmailError.innerHTML =""
    }
}

inpPassword.onblur = function () {
    if(inpPassword.value.length == 0){
        inpPassword.style ="border-bottom: 2px solid #7D7D7D"
        PasswordError.innerHTML = ""
        }
}


// oninput
inpEmail.oninput = function () {
    if(regexemail.test(inpEmail.value) === true ){
        inpEmail.style='border-bottom: 2px solid #15AAD9'
        EmailError.innerHTML = "<p> <i class='fa-solid fa-check'></i> Email valide</p>"
        EmailError.style.color='#15AAD9'
        inpEmail.style.color ="#15AAD9"
    }else{
        EmailError.innerHTML = "<p><i class='fa-solid fa-xmark'></i> Email no valide</p>"
        inpEmail.style='border-bottom: 2px solid red';
        EmailError.style.color='red'
        inpEmail.style.color ="red"
    }

}

inpPassword.oninput = function () {
    if(inpPassword.value.length >0){
        icon.style.display="block"
    }else{
        icon.style.display="none"
    }
if(inpPassword.value.length >= 8 && regexpassw.test(inpPassword.value) === true){
    inpPassword.style='border-bottom: 2px solid #15AAD9';
    PasswordError.innerHTML = "<p><i class='fa-solid fa-check'></i> Password valide</p>"
    PasswordError.style.color='#15AAD9'
    inpPassword.style.color ="#15AAD9"
}else if (inpPassword.value.length >= 8){
    inpPassword.style='border-bottom: 2px solid red';
    PasswordError.innerHTML = "<p style='color:#15AAD9'><i class='fa-solid fa-check'></i> Password greater than 8 characters</p> <p style='color:red'><i class='fa-solid fa-xmark'></i> Password Pssword consisting of number and letters</p>"
    inpPassword.style.color ="red"
}else if(regexpassw.test(inpPassword.value) === true){
    inpPassword.style='border-bottom: 2px solid red';
    PasswordError.innerHTML = "<p style='color:red'><i class='fa-solid fa-xmark'></i> Password greater than 8 characters</p> <p style='color:#15AAD9'><i class='fa-solid fa-check'></i> Password Pssword consisting of number and letters</p>"
    inpPassword.style.color ="red"
}else{
    PasswordError.innerHTML = "<p><i class='fa-solid fa-xmark'></i> Password greater than 8 characters</p> <p><i class='fa-solid fa-xmark'></i> Password Pssword consisting of number and letters</p>"
    inpPassword.style='border-bottom: 2px solid red';
    PasswordError.style.color='red'
    inpPassword.style.color ="red"
}
}


// validate information at the click a button
subBtn.onclick = function validvalue(event){
    EmaillValid = false
    PasswordValid = false

    if(regexemail.test(inpEmail.value) === true ){
        EmaillValid = true
    }
    if(inpPassword.value.length >= 8 && regexpassw.test(inpPassword.value) === true){
        PasswordValid = true
    }

    if(EmaillValid == false || PasswordValid == false){
        event.preventDefault()
    }

}


// ******************************************
let icon = document.getElementById("icon");



icon.onclick = function(){

    if(icon.classList.contains("fa-eye-slash")== true){
        icon.classList.remove("fa-eye-slash")
        icon.classList.add("fa-eye")
        window.inpPassword.setAttribute('type','text')     
    }else{
        icon.classList.add("fa-eye-slash")
        icon.classList.remove("fa-eye")
        inpPassword.type="password"
        window.inpPassword.setAttribute('type','password')     
    }
}

