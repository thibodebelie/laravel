function validateForm(){
    document.getElementById('activiteitForm').addEventListener('submit', function(event) {
        const naamInput = document.getElementById('naam');
        const voornaamInput = document.getElementById('voornaam');
        const nummerInput = document.getElementById('telefoonnummer');
        const groepInput = document.getElementById('groep');

      
        let isEmptyField = false;
      
        if (naamInput.value === '') {
    
          alert('Gelieve de naam in te vullen.');
          isEmptyField = true;
        }
        if (voornaamInput.value === '') {
          alert('Gelieve de voornaam in te vullen.');
          isEmptyField = true;
        }
        if (emailInput.value === '') {
          alert('Gelieve het emailadres in te vullen.');
          isEmptyField = true;
        }
        if (nummerInput.value === '') {
          alert('Gelieve de telefoonnummer in te vullen.');
          isEmptyField = true;
        }
        if (groepInput.value === '') {
          alert('Gelieve de groep in te vullen.');
          isEmptyField = true;
        }
        
      
        if (isEmptyField) {
          event.preventDefault(); 
          return false;
        }
      });
}



function closeAlert() {
    const validationAlert = document.getElementById('validationAlert');
    validationAlert.style.display = 'none';
    location.reload();
}

document.getElementById('closeButton').addEventListener('click', closeAlert);