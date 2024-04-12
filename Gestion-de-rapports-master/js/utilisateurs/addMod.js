function handleSubmit(event, form) {
    event.preventDefault();

    const regEx = /^[a-zA-Z]+$/;
    const emailRegEx = /^\S+@\S+\.\S+$/;
    const fields = [
        { id: "nom", errorMessage: "Format invalide. Utilisez uniquement des lettres de l'alphabet." },
        { id: "prenom", errorMessage: "Format invalide. Utilisez uniquement des lettres de l'alphabet." },
        { id: "filiere", errorMessage: "Format invalide. Utilisez uniquement des lettres de l'alphabet." },
        { id: "email", errorMessage: "Adresse email invalide." },
        { id: "image", errorMessage: "Veuillez sélectionner un fichier." }
    ];

    for (const field of fields) {
        const element = document.getElementById(field.id);
        if (!element.value.trim()) {
            displayError(field.errorMessage, element.nextElementSibling);
            return;
        } else {
            clearError(element.nextElementSibling);
        }

        if (field.id === "email" && !emailRegEx.test(element.value)) {
            displayError(field.errorMessage, element.nextElementSibling);
            return;
        } else if ((field.id === "prenom" || field.id === "filiere" || field.id === "nom") && !regEx.test(element.value)) {
            displayError(field.errorMessage, element.nextElementSibling);
            return;
        } else {
            clearError(element.nextElementSibling);
        }
    }

    form.submit();
}

addModForm.addEventListener("submit", event => handleSubmit(event, addModForm));
