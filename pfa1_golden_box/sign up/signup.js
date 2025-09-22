function validateForm() {
    let name = nameInput.value.trim();
    let password = passwordInput.value.trim();

    // Vérifier si le nom est vide
    if (name === "") {
        errorMessage.innerText = "Le nom est requis.";
        errorMessage.style.color = "red";
        return false;
    }

    // Vérifier si le nom dépasse 30 caractères
    if (name.length > 30) {
        errorMessage.innerText = "Le nom ne doit pas dépasser 30 caractères.";
        errorMessage.style.color = "red";
        return false;
    }

    // Vérifier si le mot de passe est vide
    if (password === "") {
        errorMessage.innerText = "Le mot de passe est requis.";
        errorMessage.style.color = "red";
        return false;
    }

    // Vérifier si le mot de passe dépasse 8 caractères
    if (password.length > 8) {
        errorMessage.innerText = "Le mot de passe ne doit pas dépasser 8 caractères.";
        errorMessage.style.color = "red";
        return false;
    }

    // Si toutes les vérifications passent, retourner true
    return true;
}
