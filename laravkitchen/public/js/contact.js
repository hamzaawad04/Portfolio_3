console.log('contact.js is connected!');

let appointmentForm = document.getElementById('appointment-form');
let numberButton = document.getElementById('number');
let emailButton = document.getElementById('email');
let numberInput = document.getElementById('number-input');
let emailColumn = document.getElementById('email-column');
let emailInput = document.getElementById('email-input');
let emailInputConfirm = document.getElementById('email-input-confirm');
let appointmentDate = document.getElementById('appointment-date');
let submitButton = document.getElementById('submit-button');

var isEmailVaild;
var isDateValid;

appointmentDate.addEventListener('change', function() {
    checkDate();
});

function checkDate() {
    let errorMessage = "";
    
    let date = appointmentDate.value;
    
    const currentDate = new Date();
    currentDate.setHours(0, 0, 0, 0); 
    
    if (date < currentDate.toISOString().substring(0, 10)) {
        errorMessage += 'Date must be in the future. \n';
        isDateValid = false;
    } else {
        isDateValid = true;
    }

    appointmentDate.setCustomValidity(errorMessage);
    
    appointmentDate.reportValidity();
}

numberInput.style.display = 'none';
emailColumn.style.display = 'none';

numberButton.addEventListener('click', function() {
    numberInput.style.display = 'block';
    emailColumn.style.display = 'none';
    numberInput.setAttribute('required', '');
    emailInput.removeAttribute('required');
    emailInputConfirm.removeAttribute('required');
});

emailButton.addEventListener('click', function() {
    emailColumn.style.display = 'block';
    numberInput.style.display = 'none';
    numberInput.removeAttribute('required');
    emailInput.setAttribute('required', '');
    emailInputConfirm.setAttribute('required', '');
});

emailInputConfirm.addEventListener('change', function() {
    checkEmails();
});

emailInput.addEventListener('change', function() {
    checkEmails();
});


function checkEmails () {

    let errorMessage = "";

    let email = emailInput.value;
    let confirmEmail = emailInputConfirm.value;

    if (email && confirmEmail) {
        if (email !== confirmEmail) {
            errorMessage += 'Emails do not match. Please try again. \n';
            isEmailVaild = false;
        } else {
            isEmailVaild = true;
        };

        if (email && !email.match(/^[a-zA-Z0-9._%+-]+@aston\.ac\.uk$/)) {
            errorMessage += 'Email must be an Aston email. \n';
            isEmailVaild = false;
        } else if (email && email.match(/^[a-zA-Z0-9._%+-]+@aston\.ac\.uk$/)) {
            isEmailVaild = true;
        };

        if (errorMessage) {
            emailInput.setCustomValidity(errorMessage);
            emailInputConfirm.setCustomValidity(errorMessage);
        } else {
            emailInput.setCustomValidity('');
            emailInputConfirm.setCustomValidity('');
        };
    } else {
        emailInput.setCustomValidity('');
        emailInputConfirm.setCustomValidity('');
    };

    emailInputConfirm.reportValidity(); 

};

submitButton.addEventListener('click', function() {
    validateForm();
});

function validateForm() {

    let errorMessage = "";

    if (emailInput.hasAttribute('required')) {
        if ((!isEmailVaild) || (!isDateValid)) {
            errorMessage += 'Please check the form for errors. \n';
        } else {
            errorMessage += 'Appointment booked successfully. \n';
            alert(errorMessage);
            location.reload();
        };
    } else {
        if ((!isDateValid)) {
            errorMessage += 'Please check the form for errors. \n';
        } else {
            errorMessage += 'Appointment booked successfully. \n';
            alert(errorMessage);
            location.reload();
        };
    }

    submitButton.setCustomValidity(errorMessage);
    submitButton.reportValidity();
};




