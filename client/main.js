const eyeToggle = document.getElementById('toggle-password');
eyeToggle.addEventListener('click', function (e) {
    const passwordField = document.getElementById('password-field');
    const togglePasswordIcon = e.target;

    if (passwordField.type === 'password') {
        passwordField.type = 'text';
        togglePasswordIcon.classList.remove('bi-eye-slash');
        togglePasswordIcon.classList.add('bi-eye');
    } else {
        passwordField.type = 'password';
        togglePasswordIcon.classList.remove('bi-eye');
        togglePasswordIcon.classList.add('bi-eye-slash');
    }
});
