searchForm.addEventListener("submit",function (event){
    event.preventDefault();
    if(searchTitre.classList.contains("active")){
        this.submit();
        return;
    }
    if(searchEtudiant.classList.contains("active")){
        let regex = /^[a-zA-Z]+$/;
        if (!regex.test(searchInput.value.trim())) {
            displayError("Not valid username",searchErr);
            return;
        }
        clearError(searchErr);
    }
    if (searchDate.classList.contains("active")) {
        if(!verifyDate(searchInput.value,searchErr)){
            return;
        }
        clearError(searchErr);
    }
    this.submit();
})