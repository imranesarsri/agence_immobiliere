let selected = document.getElementById("selected")
let imgOpenPageClient = document.getElementById("imgOpenPageClient")
let icon = document.getElementById("icon")
let menu = document.getElementById("menu")

selected.onclick = function(){

    if(icon.classList.contains("fa-caret-down")== true){
        icon.classList.remove("fa-caret-down")
        icon.classList.add("fa-caret-up")
        menu.style.display="block"  
    }else{
        icon.classList.add("fa-caret-down")
        icon.classList.remove("fa-caret-up")
        menu.style.display="none" 
    }

}


imgOpenPageClient.onclick = function(){

    if(icon.classList.contains("fa-caret-down")== true){
        icon.classList.remove("fa-caret-down")
        icon.classList.add("fa-caret-up")
        menu.style.display="block"  
    }else{
        icon.classList.add("fa-caret-down")
        icon.classList.remove("fa-caret-up")
        menu.style.display="none" 
    }

}

let divSubmitPageClien = document.getElementById("divSubmitPageClien")
let divSubmitPage = document.getElementById("divSubmitPage")

divSubmitPageClien.onclick = function() {
    window.open("../client/pageClien.php");
}
divSubmitPage.onclick = function() {
    window.open("../client/pageClien.php");
};


