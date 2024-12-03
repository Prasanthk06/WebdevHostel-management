const container = document.getElementById('container');
const switchToSignup = document.getElementById('switch-to-signup');
const switchToLogin = document.getElementById('switch-to-login');

// Switch to Signup Form
switchToSignup.addEventListener('click', () => {
    container.classList.add('active');
});

// Switch to Login Form
switchToLogin.addEventListener('click', () => {
    container.classList.remove('active');
});

function validateLogin() {
    alert("Login successful!");
    return false; // Prevent form submission for demo purposes
}

function validateSignup() {
    alert("Signup successful!");
    return false; // Prevent form submission for demo purposes
}
