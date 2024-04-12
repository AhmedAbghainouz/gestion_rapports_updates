searchForm.addEventListener("submit",function (event){
    event.preventDefault();
    if(searchId.classList.contains("active")){
        let regex = /^\d+$/;
        if (!regex.test(searchInput.value.trim())) {
            displayError("Id should be an integer",searchErr);
            return;
        }
    }
    else if(searchName.classList.contains("active")){
        let regex = /^[a-zA-Z]+$/;
        if (!regex.test(searchInput.value.trim())) {
            displayError("Not valid username",searchErr);
            return;
        }
    }
    this.submit();
})