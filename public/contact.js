function validateForm(){
    document.getElementById('activiteitForm').addEventListener('submit', function(event) {
        const naamInput = document.getElementById('name');
        const voornaamInput = document.getElementById('firstname');
        const emailInput = document.getElementById('email');
        const nummerInput = document.getElementById('number');
        const berichtInput = document.getElementById('message');

      
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
        if (berichtInput.value === '') {
          alert('Gelieve de vraag in te vullen.');
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