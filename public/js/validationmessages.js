// Form validation script
document.addEventListener('DOMContentLoaded', function() {
    // Validation rules and messages
    const validationRules = {
        'register-name': {
            pattern: /^[A-Za-z]+\s+[A-Za-z]+\s+[A-Za-z]+$/,  // Must have exactly three names
            message: 'Full name should contain first, middle and last name (letters only)'
        },
        'register-email': {
            pattern: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
            message: 'Please enter a valid email address'
        },
        'register-password': {
            pattern: /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*#?&]{8,}$/,
            message: 'Password must be at least 8 characters with letters and numbers'
        },
        'register-confirm-password': {
            customValidation: function(value) {
                return value === document.getElementById('register-password').value;
            },
            message: 'Passwords must match'
        },
        'register-phone': {
            pattern: /^\d{11}$/,
            message: 'Phone number must be 11 digits'
        },
        'login-email': {
            pattern: /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/,
            message: 'Please enter a valid email address'
        },
        'login-password': {
            pattern: /.+/,
            message: 'Password is required'
        },
        'area': {
            customValidation: function(value) {
                return value !== null && value !== "";
            },
            message: 'Please select your area'
        },
        'service': {
            customValidation: function(value) {
                return value !== null && value !== "";
            },
            message: 'Please select your service'
        }
    };

    // Helper function to create or update validation message
    function createOrUpdateValidationMessage(inputElement, message, isValid) {
        const elementId = inputElement.id + '-validation';
        let validationElement = document.getElementById(elementId);

        if (!validationElement) {
            validationElement = document.createElement('div');
            validationElement.id = elementId;
            validationElement.className = 'validation-message';
            validationElement.style.fontSize = '11px';
            validationElement.style.paddingLeft = '5px';
            validationElement.style.marginTop = '2px';
            validationElement.style.marginBottom = '8px';
            validationElement.style.transition = 'all 0.3s ease';
            validationElement.style.textAlign = 'left'; // Ensure left alignment

            // Insert after the input group
            const inputGroup = inputElement.closest('.input-group');
            inputGroup.parentNode.insertBefore(validationElement, inputGroup.nextSibling);
        }

        // If valid, hide the message, otherwise show with red color
        if (isValid) {
            validationElement.style.display = 'none';
        } else {
            validationElement.style.display = 'block';
            validationElement.textContent = message;
            validationElement.style.color = '#f44336';
        }

        // Update input border
        inputElement.style.borderColor = isValid ? '#4CAF50' : '#f44336';
        inputElement.style.borderWidth = '1px';
        inputElement.style.borderStyle = 'solid';
    }

    // Helper function to remove validation message
    function removeValidationMessage(inputElement) {
        const elementId = inputElement.id + '-validation';
        const validationElement = document.getElementById(elementId);

        if (validationElement) {
            validationElement.remove();
        }

        // Reset input border
        inputElement.style.borderColor = '';
        inputElement.style.borderWidth = '';
        inputElement.style.borderStyle = '';
    }

    // Helper function to validate an input
    function validateInput(inputElement) {
        const rule = validationRules[inputElement.id] || validationRules[inputElement.name];

        if (!rule) return;

        const value = inputElement.value;
        let isValid = false;

        // Check if the field is required and empty
        if (inputElement.required && value === '') {
            createOrUpdateValidationMessage(inputElement, 'This field is required', false);
            return false;
        }

        // Skip validation if the field is empty (unless it's focused)
        if (value === '' && document.activeElement !== inputElement) {
            removeValidationMessage(inputElement);
            return;
        }

        // For select elements
        if (inputElement.tagName === 'SELECT') {
            isValid = rule.customValidation ? rule.customValidation(value) : true;
        }
        // For other inputs
        else {
            if (rule.pattern) {
                isValid = rule.pattern.test(value);
            } else if (rule.customValidation) {
                isValid = rule.customValidation(value);
            }
        }

        createOrUpdateValidationMessage(inputElement, rule.message, isValid);
        return isValid;
    }

    // Find all inputs and attach event listeners
    const inputs = document.querySelectorAll('input, select');

    inputs.forEach(function(input) {
        if (!validationRules[input.id] && !validationRules[input.name]) return;

        // Show validation message on focus
        input.addEventListener('focus', function() {
            validateInput(input);
        });

        // Update validation as user types
        input.addEventListener('input', function() {
            validateInput(input);

            // Special case for full name - always validate for three names
            if (input.id === 'register-name') {
                const namePattern = validationRules['register-name'].pattern;
                const isValid = namePattern.test(input.value);
                createOrUpdateValidationMessage(input, validationRules['register-name'].message, isValid);
            }
        });

        // Special case for confirm password
        if (input.id === 'register-confirm-password') {
            document.getElementById('register-password').addEventListener('input', function() {
                if (input.value !== '') {
                    validateInput(input);
                }
            });
        }

        // Hide validation message on blur if empty (except for required fields)
        input.addEventListener('blur', function() {
            if (input.value === '' && !input.required) {
                removeValidationMessage(input);
            } else if (input.id === 'register-name') {
                // Always validate name field on blur to ensure three names
                const namePattern = validationRules['register-name'].pattern;
                const isValid = namePattern.test(input.value);
                createOrUpdateValidationMessage(input, validationRules['register-name'].message, isValid);
            }
        });
    });

    // Helper function to validate empty fields and mark them as required
    function validateRequiredField(input) {
        // Skip non-required fields
        if (!input.required) return true;

        const isEmpty = input.value.trim() === '';
        if (isEmpty) {
            const elementId = input.id + '-validation';
            let validationElement = document.getElementById(elementId);

            if (!validationElement) {
                validationElement = document.createElement('div');
                validationElement.id = elementId;
                validationElement.className = 'validation-message';
                validationElement.style.fontSize = '11px';
                validationElement.style.paddingLeft = '5px';
                validationElement.style.marginTop = '2px';
                validationElement.style.marginBottom = '8px';
                validationElement.style.transition = 'all 0.3s ease';
                validationElement.style.textAlign = 'left';

                const inputGroup = input.closest('.input-group') || input.parentNode;
                inputGroup.parentNode.insertBefore(validationElement, inputGroup.nextSibling);
            }

            validationElement.style.display = 'block';
            validationElement.textContent = 'This field is required';
            validationElement.style.color = '#f44336';

            // Update input border
            input.style.borderColor = '#f44336';
            input.style.borderWidth = '1px';
            input.style.borderStyle = 'solid';
        }

        return !isEmpty;
    }

    // Form submission validation
    const registerForm = document.getElementById('registerForm');
    const loginForm = document.getElementById('loginForm');

    // Directly attach click handler to register/signup button to ensure it works
    const registerButton = registerForm ? registerForm.querySelector('button[type="submit"]') : null;
    if (registerButton) {
        registerButton.addEventListener('click', function(e) {
            let hasError = false;

            // Validate all inputs in the form
            const formInputs = registerForm.querySelectorAll('input:not([type="checkbox"]), select');
            formInputs.forEach(function(input) {
                // First check if it's empty and required
                const isValid = validateRequiredField(input);
                if (!isValid) hasError = true;

                // Then apply regular validation rules
                if (validationRules[input.id] || validationRules[input.name]) {
                    if (input.value.trim() !== '') {
                        validateInput(input);

                        // Check if there are any validation errors
                        const validationElement = document.getElementById(input.id + '-validation');
                        if (validationElement && validationElement.style.display !== 'none') {
                            hasError = true;
                        }
                    }
                }
            });

            if (hasError) {
                e.preventDefault();
                console.log('Form validation failed');
            } else {
                console.log('Form validation passed, attempting submission');
                // Allow normal form submission
            }
        });
    }

    // Original form submit handlers as backup
    if (registerForm) {
        registerForm.addEventListener('submit', function(e) {
            let hasError = false;

            // Validate all inputs in the form
            const formInputs = this.querySelectorAll('input:not([type="checkbox"]), select');
            formInputs.forEach(function(input) {
                // Check required fields
                const isValid = validateRequiredField(input);
                if (!isValid) hasError = true;

                if (validationRules[input.id] || validationRules[input.name]) {
                    validateInput(input);

                    // Check if there are any validation errors
                    const validationElement = document.getElementById(input.id + '-validation');
                    if (validationElement && validationElement.style.display !== 'none') {
                        hasError = true;
                    }
                }
            });

            if (hasError) {
                e.preventDefault();
                console.log('Form submission prevented due to validation errors');
            }
        });
    }

    if (loginForm) {
        loginForm.addEventListener('submit', function(e) {
            let hasError = false;

            // Validate all inputs in the form
            const formInputs = this.querySelectorAll('input');
            formInputs.forEach(function(input) {
                // Check required fields
                const isValid = validateRequiredField(input);
                if (!isValid) hasError = true;

                if (validationRules[input.id]) {
                    validateInput(input);

                    // Check if there are any validation errors
                    const validationElement = document.getElementById(input.id + '-validation');
                    if (validationElement && validationElement.style.display !== 'none') {
                        hasError = true;
                    }
                }
            });

            if (hasError) {
                e.preventDefault();
            }
        });
    }
});

// Add this script to help debug form submission issues and mark all required fields on page load
document.addEventListener('DOMContentLoaded', function() {
    // Debug login form
    const loginForm = document.getElementById('loginForm');
    const loginButton = loginForm ? loginForm.querySelector('button[type="submit"]') : null;

    if (loginButton) {
        // Add a direct click handler to check if button clicks are registered
        loginButton.addEventListener('click', function(e) {
            console.log('Login button clicked');
            // Make sure all required fields are validated
            const formInputs = loginForm.querySelectorAll('input[required]');
            formInputs.forEach(function(input) {
                validateRequiredField(input);
            });
        });
    }

    // Log when forms are actually submitted
    if (loginForm) {
        loginForm.addEventListener('submit', function() {
            console.log('Login form submitted');
        });
    }

    const registerForm = document.getElementById('registerForm');
    if (registerForm) {
        registerForm.addEventListener('submit', function() {
            console.log('Register form submitted');
        });
    }

    // Add * to labels of required fields and initialize validation for them
    const requiredInputs = document.querySelectorAll('input[required], select[required]');
    requiredInputs.forEach(function(input) {
        // Find associated label
        let label = document.querySelector(`label[for="${input.id}"]`);

        if (label && !label.textContent.includes('*')) {
            // Add red asterisk to label
            const asterisk = document.createElement('span');
            asterisk.textContent = ' *';
            asterisk.style.color = '#f44336';
            label.appendChild(asterisk);
        }

        // Validate on blur to show empty field errors
        input.addEventListener('blur', function() {
            if (input.value.trim() === '') {
                validateRequiredField(input);
            }
        });
    });
});
