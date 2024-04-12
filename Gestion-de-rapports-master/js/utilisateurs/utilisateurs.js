const modefier = document.querySelectorAll("a.modefier");
const supprimer = document.querySelectorAll("a.supprimer");
const dialogAddMod = document.querySelector(".dialog-add-mod")
const dialogSure = document.querySelector(".dialog-sure");
const searchName = document.querySelector('.search-name');
const searchId = document.querySelector('.search-id');
const searchForm = document.getElementById("search-form")
const searchInput = document.getElementById("search");
const searchErr = document.querySelector(".search-err");
const notSure = document.querySelector(".not-sure");
const select = document.getElementById("slct");
const exits = document.querySelectorAll(".exit");
const addUser = document.querySelector(".add-user");
const addModForm = document.querySelector("form.add-mod");
const fields = [
    { id: "nom", errorMessage: "Format invalide. Utilisez uniquement des lettres de l'alphabet." },
    { id: "prenom", errorMessage: "Format invalide. Utilisez uniquement des lettres de l'alphabet." },
    { id: "filiere", errorMessage: "Format invalide. Utilisez uniquement des lettres de l'alphabet." },
    { id: "email", errorMessage: "Adresse email invalide." },
    { id: "image", errorMessage: "Veuillez sélectionner un fichier." }
];

clearOverlay(overlay);
exits.forEach((exit)=>{
    clearOverlayOnClick(exit,overlay);
})
clearOverlayOnClick(notSure,overlay);


