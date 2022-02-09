const recherche = document.querySelector(".users .search input"),
    recherchebtn = document.querySelector(".users .search button"),
    usersList = document.querySelector(".users .users-list");

recherchebtn.onclick = () => {
    recherche.classList.toggle("active");
    recherche.focus();
    recherchebtn.classList.toggle("active");
    recherche.value = "";


}

recherche.onkeyup = () => {
    let rUnepersonne = recherche.value;
    if (rUnepersonne != "") {
        recherche.classList.add("active");
    } else {
        recherche.classList.remove("active");
    }

    //console.log(rUnepersonne);
    // Creation d'Ajax objet
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "php/search.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                //console.log(data);
                usersList.innerHTML = data;
            }
        }
    }
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send("rUnepersonne=" + rUnepersonne);
}

setInterval(() => {
    // Creation d'Ajax objet
    let xhr = new XMLHttpRequest();
    xhr.open("GET", "php/users.php", true);
    xhr.onload = () => {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                let data = xhr.response;
                //console.log(data);
                //usersList.innerHTML = data;
                if (!recherche.classList.contains("active")) { //il ative ne contient pas dans la barre de recherche puis ajoutez des données
                    usersList.innerHTML = data;

                }

            }
        }
    }
    xhr.send();

}, 500); //cette fonction s'exécutera fréquemment après 500 ms