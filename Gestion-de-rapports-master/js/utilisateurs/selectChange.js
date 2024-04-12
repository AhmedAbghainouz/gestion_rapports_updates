select.addEventListener("change", function() {
    var descriptionLabel = document.querySelector('.niveau-label');
    var descriptionInput = document.querySelector('.niveau-input');
    
    if (select.value === "Etudiant") {
        if (!descriptionLabel && !descriptionInput) {
            // Create label and input elements
            var label = document.createElement('label');
            label.setAttribute('for', 'description');
            label.classList.add('db', 'mt-5', 'niveau-label');
            label.innerText = 'Niveau';
            
            var input = document.createElement('input');
            input.setAttribute('type', 'text');
            input.setAttribute('id', 'description');
            input.classList.add('w-full', 'mbl-5', 'br-5', 'border-ccc', 'niveau-input');
            
            // Append label and input to dialogMod
            dialogMod.appendChild(label);
            dialogMod.appendChild(input);
        }
    } else if (select.value === "Administateur") {
        // Remove label and input elements if they exist
        if (descriptionLabel && descriptionInput) {
            descriptionLabel.remove();
            descriptionInput.remove();
        }
    }
});