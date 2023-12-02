document.addEventListener("DOMContentLoaded", function() {
    var loginButton = document.getElementById('loginButton');
    var signUpButton = document.getElementById('RegisterButton'); // Assuming there's a button with this ID
 
    loginButton.addEventListener('click', function() {
        console.log("Login button clicked");
        signIn();
    });

    signUpButton.addEventListener('click', function() {
        console.log("Register Button clicked");
        signUp();
    });

     
    
    document.getElementById('dob').addEventListener('input', function () {
        document.getElementById('dobError').textContent = '';
    });
});


function validateEmail(email, actionType) {
    // Validation générique de l'email
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    var isValid = emailRegex.test(email);

    // Logique de validation spécifique à l'action
    if (actionType === 'signup') {
        // Ajoutez ici les règles de validation spécifiques à l'inscription
        // Par exemple, vérifier si l'email est déjà utilisé pour un autre compte
    } else if (actionType === 'signin') {
        // Ajoutez ici les règles de validation spécifiques à la connexion
    }

    return isValid;
}

function validatePassword(password, actionType) {
    // Validation générique du mot de passe
    var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
    var isValid = passwordRegex.test(password);

    var errors = [];

    // Logique de validation spécifique à l'action
    if (actionType === 'signup') {
        // Exemple de règle supplémentaire : la longueur minimale
        if (password.length < 8) {
            errors.push("The password must be at least 8 characters long.");
        }

        // Ajouter des messages d'erreur spécifiques ici en fonction de vos critères
        if (!/(?=.*[a-z])/.test(password)) {
            errors.push("The password must contain at least one lowercase letter.");
        }

        if (!/(?=.*[A-Z])/.test(password)) {
            errors.push("The password must contain at least one uppercase letter");
        }

        if (!/(?=.*\d)/.test(password)) {
            errors.push(" The password must contain at least one digit.");
        }

        if (!/(?=.*[@$!%*?&])/.test(password)) {
            errors.push("The password must contain at least one special character among @$!%*?&.");
        }
    } else if (actionType === 'signin') {
        // Ajoutez ici les règles de validation spécifiques à la connexion
    }

    return errors.length > 0 ? errors : null;
}




function validateDate(date) {
    var dobRegex = /^(\d{1,2})\/(\d{1,2})\/(\d{4})$/;
    if (!dobRegex.test(date)) {
        return 'Invalid date format';
    }

    var [, day, month, year] = date.match(dobRegex);
    day = parseInt(day, 10);
    month = parseInt(month, 10);
    year = parseInt(year, 10);

    if (day < 1 || day > 31) {
        return 'Invalid day (should be between 1 and 31)';
    }

    if (month < 1 || month > 12) {
        return 'Invalid month (should be between 1 and 12)';
    }
       // Validate days for specific months
    if ([4, 6, 9, 11].includes(month) && day > 30) {
        return 'Invalid day  (this month contains 30day) ';
    }

    if (year < 1950) {
        return 'Invalid year (should be 1950 or later)';
    }

    if ( (month === 2 && (day > 29 || (day > 28 && !((year % 4 === 0 && year % 100 !== 0) || year % 400 === 0)))) ) {
        return 'Invalid day (februry logic )';
    }
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var currentMonth = currentDate.getMonth() + 1; 
    var currentDay = currentDate.getDate();

    if (year > currentYear) {
        return 'Invalid year';
    }

    if (year === currentYear) {
        if (month > currentMonth || (month === currentMonth && day > currentDay)) {
            return 'Invalid Date ';
        }
    }
    // Check if the user is at least 15 years old
    // Calculate the user's age
        var userAge = currentYear - year;
    if (userAge < 15) {
          return 'You must be at least 15 years old.';
    }
      
      return null;
}




function validateName(name) {
    // Vérifier si le prénom et le nom ne sont pas vides et contiennent uniquement des lettres
    var nameRegex = /^[A-Za-z]+$/;
    return nameRegex.test(name);
}





function signUp() {
    var firstName = document.getElementById("firstName").value;
    var lastName = document.getElementById("lastName").value;
    var email = document.getElementById("emailnew").value;
    var password = document.getElementById("passwordnew").value;
    var dob = document.getElementById("dob").value;

    var firstNameError = document.getElementById("firstNameError");
    var lastNameError = document.getElementById("lastNameError");
    var emailError = document.getElementById("emailError");
    var passwordError = document.getElementById("passwordError");
    var dobError = document.getElementById("dobError");

    var isValid = true;

    if (!validateName(firstName)) {
        firstNameError.textContent = 'Please provide a valid first name.';
        isValid = false;
    } else {
        firstNameError.textContent = '';
    }

    if (!validateName(lastName)) {
        lastNameError.textContent = 'Please provide a valid last name.';
        isValid = false;
    } else {
        lastNameError.textContent = '';
    }

    if (!validateEmail(email, 'signup')) {
        emailError.textContent = 'Please provide a valid email address.';
        isValid = false;
    } else {
        emailError.textContent = '';
    }

    var dobValidationError = validateDate(dob);
    if (dobValidationError) {
        dobError.textContent = dobValidationError;
        isValid = false;
    } else {
        dobError.textContent = '';
    }

    var passwordValidationErrors = validatePassword(password, 'signup');
    if (passwordValidationErrors) {
        passwordError.textContent = passwordValidationErrors.join(' ');
        isValid = false;
    } else {
        passwordError.textContent = '';
    }

    var passwordRepeat = document.getElementById("passwordRepeat").value;
    var passwordRepeatError = document.getElementById("passwordRepeatError");

    if (password !== passwordRepeat) {
        passwordRepeatError.textContent = 'Passwords do not match.';
        isValid = false;
    } else {
        passwordRepeatError.textContent = '';
    }

    if (isValid) {
        // Perform the registration
        alert("Registration successful!");
    } else {
        // Display an error message
        alert("Please correct the highlighted fields before proceeding.");
    }
}







/*function signIn() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    if (validateEmail(email, 'signin') ) {
        // Effectuer la connexion
        alert(
        "Login successful!");
    } else {
        // Afficher un message d'erreur
        alert("login failed ");
    }
}

*/




$(document).ready(function() {
    // Lorsque l'utilisateur modifie le champ firstName
    $('#firstName').on('input', function() {
        var firstName = $(this).val();
        if (!validateName(firstName)) {
            $('#firstNameError').text('Please provide a valid first name .');
        } else {
            $('#firstNameError').text('');
        }
    });

    // Lorsque l'utilisateur modifie le champ lastName
    $('#lastName').on('input', function() {
        var lastName = $(this).val();
        if (!validateName(lastName)) {
            $('#lastNameError').text('Please provide a valid last name.');
        } else {
            $('#lastNameError').text('');
        }
    });

   
        // Lorsque l'utilisateur modifie le champ dob
        $('#dob').on('input', function() {
            var dob = $(this).val();
            var dobError = $('#dobError');
            
            // Validate date in real-time
            var dobValidationError = validateDate(dob);
            
            if (dobValidationError) {
                dobError.text(dobValidationError);
            } else {
                dobError.text('');
            }
        });
   
    // Lorsque l'utilisateur modifie le champ emailnew
    $('#emailnew').on('input', function() {
        var email = $(this).val();
        if (!validateEmail(email, 'signup')) {
            $('#emailError').text('  Please provide a valid mail.');
        } else {
            $('#emailError').text('');
        }
    });

// Lorsque l'utilisateur quitte le champ passwordnew
$('#passwordnew').on('blur', function() {
    var password = $(this).val();
    var passwordError = $('#passwordError');

    // Valider le mot de passe
    var passwordValidationErrors = validatePassword(password, 'signup');

    if (passwordValidationErrors) {
        passwordError.text(passwordValidationErrors.join(' '));
    } else {
        passwordError.text('');
    }
});

// Lorsque l'utilisateur quitte le champ passwordRepeat
$('#passwordRepeat').on('blur', function() {
    var passwordRepeat = $(this).val();
    var passwordRepeatError = $('#passwordRepeatError');

    // Valider la répétition du mot de passe
    if (passwordRepeat !== $('#passwordnew').val()) {
        passwordRepeatError.text('Passwords do not match.');
    } else {
        passwordRepeatError.text('');
    }
});


    
});





// ...

$(document).ready(function() {
    // ...

    // Lorsque l'utilisateur modifie le champ email
    $('#email').on('input', function() {
        var email = $(this).val();
        if (!validateEmail(email, 'signin')) {
            $('#emailErrorLogin').text('Please provide a valid mail.');
        } else {
            $('#emailErrorLogin').text('');
        }
    });

    // Lorsque l'utilisateur clique sur le bouton de connexion
    $('#loginButton').on('click', function() {
        var email = $('#email').val();

        if (validateEmail(email, 'signin')) {
            // Email is valid, display login successful alert
            alert("Login successful!");
        } else {
            // Email is not valid, display login failed alert
            alert("Login failed. Please provide a valid email address.");
        }
    });
});
