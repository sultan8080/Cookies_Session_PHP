function frontVerification() {
    let fNom = document.forms["signupform"]["nom"],
        fPrenom = document.forms["signupform"]["prenom"],
        fEmail = document.forms["signupform"]["email"],
        fPassword = document.forms["signupform"]["password"],
        fConfirmPassword = document.forms["signupform"]["confirmPassword"],
        fAdresse = document.forms["signupform"]["adresse"],
        fVille = document.forms["signupform"]["ville"],
        fPhone = document.forms["signupform"]["phone"],
        fPhoto = document.forms["signupform"]["photo"];

    let allFields = new Array(fNom, fPrenom, fEmail, fPassword, fConfirmPassword, fAdresse, fVille, fPhone, fPhoto)
    let err_msg = document.getElementById("msg_erreur");
    let erreur = 0;

    let erreur_msg_display = "";


    for (let i = 0; i < allFields.length; i++) {
        if (allFields[i].value === "") {
            allFields[i].classList.add("form-border");
            erreur_msg_display = "Veuillez remplir le(s) champ(s).";
            erreur = 1;
        } 
    }

    if (fPassword.value != fConfirmPassword.value) {
        erreur_msg_display += "Deux mots de passe ne correspondent pas.";
    }

    if (erreur === 0) {
        return true;
    } else {
        err_msg.classList.add("display_msg");
        err_msg.innerHTML = erreur_msg_display;
        return false;
    }

}