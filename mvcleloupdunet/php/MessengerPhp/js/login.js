//console.log("Hello");
const form = document.querySelector('.login form'),
    continueBtn = form.querySelector('.button input')
console.log("continueBtn");
errorText = form.querySelector('.error-txt');

form.onsubmit = (e) => {
    e.preventDefault(); // prevent default l'evenement


}

// button pour formulaire envoye
continueBtn.onclick = () => {
    //console.log("Continue");
    // Creation d'Ajax objet
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/login.php", true);
    xhr.onload = () => {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    let data = xhr.response;

                    if (data == "success") {
                        console.log(data);
                        location.href = "users.php";
                    } else {
                        errorText.textContent = data;
                        errorText.style.display = "block";
                        //console.log(errorText);
                    }
                }
            }
        }
        // haw data ajax en php
    let formData = new FormData(form); // create de form data objet
    xhr.send(formData); // sending le form data to php

}