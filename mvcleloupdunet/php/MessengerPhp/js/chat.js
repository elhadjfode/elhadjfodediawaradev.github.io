// Recuperation dans notre HTML les class 
const form = document.querySelector(".typing-area"),
    inputField = form.querySelector(".input-field"),
    sendBtn = form.querySelector("button"),
    chatBtox = document.querySelector(".chat-box");


form.onsubmit = (e) => {
    e.preventDefault(); //empêcher défaut l'evenement


}


// insertion des messages 
sendBtn.onclick = () => {
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/insert_chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                inputField.value = ""; //une fois le message inséré dans la base de données puis laissez vide le champ de saisie
                scrollToBottom();
            }
        }
    }
    let formData = new FormData(form); // créer un objet de données de forme
    xhr.send(formData); // envoyer les données du formulaire en php

}

chatBtox.onmouseenter = () => {
    chatBtox.classList.add('active');
}
chatBtox.onmouseleave = () => {
    chatBtox.classList.remove('active');
}

// Affichage des messages qui sont tous dans la base de données messages
setInterval(() => {
    // Creation d'Ajax objet
    let xhr = new XMLHttpRequest();
    //xhr.open("GET", "php/get_chat.php", true);
    xhr.open("POST", "php/get_chat.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                console.log(data);
                //usersList.innerHTML = data;
                //if (!recherche.classList.contains("active")) { //il ative ne contient pas dans la barre de recherche puis ajoutez des données
                //usersList.innerHTML = data;
                chatBtox.innerHTML = data;
                //scrollToBottom()
                if (chatBtox.classList.contains("active")) { //si la classe active ne contient pas dans chatBot le défilement vers le bas
                    scrollToBottom();
                }

                //}

            }
        }
    }
    let formData = new FormData(form); // créer un objet de données de forme
    xhr.send(formData); // envoyer les données du formulaire en php

}, 500); //cette fonction s'exécutera fréquemment après 500 ms

function scrollToBottom() {
    chatBtox.scrollTop = chatBtox.scrollHeight;
}