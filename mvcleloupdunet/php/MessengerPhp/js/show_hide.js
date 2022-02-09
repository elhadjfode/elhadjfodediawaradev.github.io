const password = document.querySelector(".form input[type='password']"),
    //console.log(password);
    toglebtn = document.querySelector(".form .field i");

// button i dans l'input password 
toglebtn.onclick = () => {
    //alert("bonjour");
    if (password.type == "password") {
        // dans password affichage
        password.type = "text";
        // pour affichage before input password active
        toglebtn.classList.add("active");

    } else {
        // dans password masqué
        password.type = "password";
        // pour masque l'affichage before input password active
        toglebtn.classList.remove("active");
    }

}