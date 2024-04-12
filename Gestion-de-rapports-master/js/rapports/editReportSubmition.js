editReportForm.addEventListener("submit",function(event){
    event.preventDefault();
    if(!verifyDate(editReportDateInput.value,editErr)){
        return;
    }
    clearError(editErr);
    editReportForm.submit();
})