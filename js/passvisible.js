const togglePassword = document.querySelector('#togglePassword');
const password = document.querySelector('#password');

togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});


const toggleRetypePassword = document.querySelector('#toggleRetypePassword');
const passwordRetype = document.querySelector('#password_repeat');

toggleRetypePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = passwordRetype.getAttribute('type') === 'password' ? 'text' : 'password';
    passwordRetype.setAttribute('type', type);
    // toggle the eye / eye slash icon
    this.classList.toggle('bi-eye');
});