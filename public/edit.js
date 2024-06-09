document.addEventListener('DOMContentLoaded', (event) => {
    validateForm();
    document.getElementById('closeButton').addEventListener('click', closeAlert);
});

function validateForm(){
    document.getElementById('activiteitForm').addEventListener('submit', function(event) {
        const datumInput = document.getElementById('datum');
        const beginInput = document.getElementById('begin');
        const eindeInput = document.getElementById('einde');
        const activiteitInput = document.getElementById('activiteit');
        const locatieInput = document.getElementById('locatie');
        const groepSelect = document.getElementById('groep');
        const idInput = document.getElementById('id');
      
        let isEmptyField = false;
      
        if (datumInput.value === '') {
    
          alert('Geef de datum van de activiteit mee.');
          isEmptyField = true;
        }
        if (beginInput.value === '') {
          alert('Geef het beginuur mee.');
          isEmptyField = true;
        }
        if (eindeInput.value === '') {
          alert('Geef het einduur mee.');
          isEmptyField = true;
        }
        if (activiteitInput.value === '') {
          alert('Geef de beschrijving van de activiteit mee.');
          isEmptyField = true;
        }
        if (locatieInput.value === '') {
          alert('Geef een locatie mee.');
          isEmptyField = true;
        }
        if (groepSelect.value === '') {
          alert('Selecteer een groep.');
          isEmptyField = true;
        }
        if (idInput.value === '') {
            alert('Geef een id mee.');
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

document.getElementById('editForm').addEventListener('click', closeAlert);
