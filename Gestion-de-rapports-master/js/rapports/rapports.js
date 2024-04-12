const searchForm = document.getElementById("search-form");
const searchInput = document.getElementById("search");
const dateOpts = document.querySelector('.date');
const searchEtudiant = document.querySelector('.etudiant');
const searchTitre = document.querySelector('.titre');
const searchDate = document.querySelector('.annee');
const searchErr = document.querySelector('.search-err');

const editIcons = document.querySelectorAll("a.edit");
const editReportDateInput = document.getElementById("date-depot");
const editReportForm = document.querySelector(".edit-report");
const editErr = document.querySelector('.edit-err');

const addRepport = document.querySelector(".ajouter-rapport");
const exit = document.querySelector('a.exit');

editIcons.forEach((icon) => {
    setOverlayOnClick(icon,overlay);
});
setOverlayOnClick(addRepport,overlay);
clearOverlay(overlay);
clearOverlayOnClick(exit,overlay);

