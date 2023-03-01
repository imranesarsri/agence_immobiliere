let profil = document.getElementById("profil")
let iconIdit = document.getElementById("iconIdit")

profil.onmouseenter = function() {
    iconIdit.style.opacity="1"
}

profil.onmouseleave = function() {
    iconIdit.style.opacity="0"
}

let Title = document.getElementById("Title")
let Prix = document.getElementById("Prix")
let Adresse = document.getElementById("Adresse")
let Ville = document.getElementById("Ville")
let Code_postal = document.getElementById("Code_postal")
let Description = document.getElementById("Description")
let submit = document.getElementById("submit")
let imgPran = document.getElementById("imgPran")
let imgSeco = document.getElementById("imgSeco")
let regeTitle = /^[a-zA-Z-\s]+$/;
let regexAdriss = new RegExp('^[a-zA-Z]+[a-zA-Z0-9.-_]');


let TitleError = document.getElementById("TitleError")
let PrixError = document.getElementById("PrixError")
let AdresseError = document.getElementById("AdresseError")
let VilleError = document.getElementById("VilleError")
let Code_postalError = document.getElementById("Code_postalError")
let DescriptionError = document.getElementById("DescriptionError")
let errorImgPran = document.getElementById("errorImgPran")
let errorimgSeco = document.getElementById("errorimgSeco")

//  onfocus
Title.onfocus = function () {
    if(Title.value.length == 0){
        Title.style ="border-bottom: 2px solid #00C2FF"
        TitleError.innerHTML = "<p style='color:#7D7D7D'>Enter a short title</p>"
        Title.style.color ="#00C2FF"
    }
}

Prix.onfocus = function () {
    if(Prix.value.length == 0){
        Prix.style ="border-bottom: 2px solid #00C2FF"
        PrixError.innerHTML = "<p style='color:#7D7D7D'>Enter the prix in DH</p>"
        Prix.style.color ="#00C2FF"
    }
}

Adresse.onfocus = function () {
    if(Adresse.value.length == 0){
        Adresse.style ="border-bottom: 2px solid #00C2FF"
        AdresseError.innerHTML = "<p style='color:#7D7D7D'>Enter your full home address</p>"
        Adresse.style.color ="#00C2FF"
    }
}

Ville.onfocus = function () {
    if(Ville.value.length == 0){
        Ville.style ="border-bottom: 2px solid #00C2FF"
        VilleError.innerHTML = "<p style='color:#7D7D7D'>Enter the city where the house is located</p>"
        Ville.style.color ="#00C2FF"
    }
}

Code_postal.onfocus = function () {
    if(Code_postal.value.length == 0){
        Code_postal.style ="border-bottom: 2px solid #00C2FF"
        Code_postal.style.color ="#00C2FF"
    }
}

Description.onfocus = function () {
    if(Description.value.length == 0){
        Description.style ="border-bottom: 2px solid #00C2FF"
        DescriptionError.innerHTML = "<p style='color:#7D7D7D'>Enter a decription of the house, consistiog of at leat 10 characters</p>"
        Description.style.color ="#00C2FF"
    }
}


// onblur
Title.onblur = function () {
    if(Title.value.length == 0){
        Title.style ="border-bottom: 2px solid #7D7D7D"
        TitleError.innerHTML =""
    }
}

Prix.onblur = function () {
    if(Prix.value.length == 0){
        Prix.style ="border-bottom: 2px solid #7D7D7D"
        PrixError.innerHTML =""
    }
}

Adresse.onblur = function () {
    if(Adresse.value.length == 0){
        Adresse.style ="border-bottom: 2px solid #7D7D7D"
        AdresseError.innerHTML =""
    }
}

VilleError.onblur = function () {
    if(VilleError.value.length == 0){
        VilleError.style ="border-bottom: 2px solid #7D7D7D"
        VilleErrorError.innerHTML =""
    }
}

Code_postal.onblur = function () {
    if(Code_postal.value.length == 0){
        Code_postal.style ="border-bottom: 2px solid #7D7D7D"
        Code_postalError.innerHTML =""
    }
}

Description.onblur = function () {
    if(Description.value.length == 0){
        Description.style ="border-bottom: 2px solid #7D7D7D"
        DescriptionError.innerHTML =""
    }
}



Title.oninput = function () {
    if(Title.value.length >= 5 && regeTitle.test(Title.value) === true ){
        Title.style='border-bottom: 2px solid #15AAD9'
        TitleError.innerHTML = "<p><i class='fa-solid fa-check'></i> Title valide</p>"
        TitleError.style.color='#15AAD9'
        Title.style.color ="#15AAD9"
    }else if (Title.value.length >= 5) {
        TitleError.innerHTML ="<p style='color:#15AAD9'><i class='fa-solid fa-check'></i> Title is greater than 5 letters</p> <p style='color: red'><i class='fa-solid fa-xmark'></i>Enter the Title without numbers</p>"
        Title.style='border-bottom: 2px solid red'
        Title.style.color ="red"
    }else {
        TitleError.innerHTML ="<p><i class='fa-solid fa-xmark'></i> Title is greater than 5 letters</p> <p><i class='fa-solid fa-xmark'></i> Enter the Title without numbers</p>"
        Title.style='border-bottom: 2px solid red'
        TitleError.style.color='red'
        Title.style.color ="red"
    }
}

Prix.oninput = function () {
    if(Prix.value.length >= 1){
        Prix.style='border-bottom: 2px solid #15AAD9'
        PrixError.innerHTML = "<p><i class='fa-solid fa-check'></i> Prix valide</p>"
        PrixError.style.color='#15AAD9'
        Prix.style.color ="#15AAD9"
    }else if (Prix.value.length == 0 || Prix.value === 0 ) {
            PrixError.innerHTML ="<p><i class='fa-solid fa-xmark'></i> Prix is greater than 1DH letters</p>"
            Prix.style='border-bottom: 2px solid red'
            PrixError.style.color='red'
            Prix.style.color ="red"
    }
}

Adresse.oninput = function () {
    if(Adresse.value.length >= 10 && regexAdriss.test(Adresse.value) === true){
        Adresse.style='border-bottom: 2px solid #15AAD9'
        AdresseError.innerHTML = "<p><i class='fa-solid fa-check'></i> Adresse valide</p>"
        AdresseError.style.color='#15AAD9'
        Adresse.style.color ="#15AAD9"
    }else if(Adresse.value.length < 10 && regexAdriss.test(Adresse.value) === true) {
        AdresseError.innerHTML ="<p><i class='fa-solid fa-xmark'></i> Adresse is greater than 10 letters</p> <p style='color:#00C2FF'><i class='fa-solid fa-check'></i> The address should not contain numbers only</p>"
        Adresse.style='border-bottom: 2px solid red'
        AdresseError.style.color='red'
        Adresse.style.color ="red"
    }else if(Adresse.value.length >= 10 && regexAdriss.test(Adresse.value) !== true) {
        AdresseError.innerHTML ="<p style='color:#00C2FF'><i class='fa-solid fa-check'></i> Adresse is greater than 10 letters</p> <p><i class='fa-solid fa-xmark'></i> The address should not contain numbers only</p>"
        Adresse.style='border-bottom: 2px solid red'
        AdresseError.style.color='red'
        Adresse.style.color ="red"
    }else {
        AdresseError.innerHTML ="<p><i class='fa-solid fa-xmark'></i> Adresse is greater than 10 letters</p> <p><i class='fa-solid fa-xmark'></i> The address should not contain numbers only</p>"
        Adresse.style='border-bottom: 2px solid red'
        AdresseError.style.color='red'
        Adresse.style.color ="red"
    }
}



Ville.oninput = function () {
    if(Ville.value.length >= 3 && regeTitle.test(Ville.value) === true ){
        Ville.style='border-bottom: 2px solid #15AAD9'
        VilleError.innerHTML = "<p><i class='fa-solid fa-check'></i> Ville valide</p>"
        VilleError.style.color='#15AAD9'
        Ville.style.color ="#15AAD9"
    }else if (Ville.value.length >= 3) {
        VilleError.innerHTML ="<p style='color:#15AAD9'><i class='fa-solid fa-check'></i> Ville is greater than 3 letters</p> <p style='color: red'><i class='fa-solid fa-xmark'></i>Enter the Ville without numbers</p>"
        Ville.style='border-bottom: 2px solid red'
        Ville.style.color ="red"
    }else {
        VilleError.innerHTML ="<p><i class='fa-solid fa-xmark'></i> Ville is greater than 3 letters</p> <p><i class='fa-solid fa-xmark'></i> Enter the Ville without numbers</p>"
        Ville.style='border-bottom: 2px solid red'
        VilleError.style.color='red'
        Ville.style.color ="red"
    }
}


Code_postal.oninput = function () {
    if(Code_postal.value.length >= 5){
        Code_postal.style='border-bottom: 2px solid #15AAD9'
        Code_postalError.innerHTML = "<p><i class='fa-solid fa-check'></i> Code_postal valide</p>"
        Code_postalError.style.color='#15AAD9'
        Code_postal.style.color ="#15AAD9"
    }else if(Code_postal.value === 0){

        Code_postalError.innerHTML ="<p><i class='fa-solid fa-xmark'></i> Code_postal is greater than 5 letters</p>"
        Code_postal.style='border-bottom: 2px solid red'
        Code_postalError.style.color='red'
        Code_postal.style.color ="red"
    }else{
        Code_postalError.innerHTML ="<p><i class='fa-solid fa-xmark'></i> Code_postal is greater than 5 letters</p>"
        Code_postal.style='border-bottom: 2px solid red'
        Code_postalError.style.color='red'
        Code_postal.style.color ="red"
    }
}

Description.oninput = function () {
    if(Description.value.length >= 20 && regeTitle.test(Description.value) === true ){
        Description.style='border-bottom: 2px solid #15AAD9'
        DescriptionError.innerHTML = "<p><i class='fa-solid fa-check'></i> Description valide</p>"
        DescriptionError.style.color='#15AAD9'
        Description.style.color ="#15AAD9"
    }else if (Description.value.length >= 5) {
        DescriptionError.innerHTML ="<p style='color:#15AAD9'><i class='fa-solid fa-check'></i> Enter the Description without numbers</p> <p style='color: red'><i class='fa-solid fa-xmark'></i>Description is greater than 20 letters</p>"
        Description.style='border-bottom: 2px solid red'
        Description.style.color ="red"
    }else {
        DescriptionError.innerHTML ="<p><i class='fa-solid fa-xmark'></i> Description is greater than 20 letters</p> <p><i class='fa-solid fa-xmark'></i> Enter the Description without numbers</p>"
        Description.style='border-bottom: 2px solid red'
        DescriptionError.style.color='red'
        Description.style.color ="red"
    }
}

// validate information at the click a button
submit.onclick = function(event){

    TitleValid = false
    PrixeValid = false
    AdresValid = false
    VilleValid = false
    CodelValid = false
    DescrValid = false


    if(Title.value.length >= 5 && regeTitle.test(Title.value) === true ){
        TitleValid = true
    }

    if(Prix.value.length >= 1){
        PrixeValid = true
    }

    if(Adresse.value.length >= 10 && regexAdriss.test(Adresse.value) === true){
        AdresValid = true
    }

    if(Ville.value.length >= 3 && regeTitle.test(Ville.value) === true ){
        VilleValid = true
    }
    
    if(Code_postal.value.length >= 5){
        CodelValid = true
    }

    if(Description.value.length >= 20 && regeTitle.test(Description.value) === true ){
        DescrValid = true
    }

    if(TitleValid == false || PrixeValid == false || AdresValid == false || VilleValid == false || CodelValid == false || DescrValid == false){
        event.preventDefault()
    }

}

let btsSignOut = document.getElementById("btsSignOut")
btsSignOut.onclick = function() {
    window.open("../home/index.php");
}


let btnDelete = document.getElementById("btnDelete")
btnDelete.onclick = function() {
    window.open("../client/pageClien.php");
}


let btnDeleteAcounts = document.getElementById("btnDeleteAcounts")
btnDeleteAcounts.onclick = function() {
    window.open("../home/index.php");
}
