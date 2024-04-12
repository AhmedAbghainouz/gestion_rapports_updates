const options = document.querySelectorAll('.options .option');
options.forEach(option => {
    option.addEventListener('click', function() {
        options.forEach(opt => opt.classList.remove('active'));
        this.classList.add('active');
        clearError(searchErr);
    });
});