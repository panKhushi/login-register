const container = document.querySelector('.container');
const registerBtn = document.querySelector('.register-btn');
const loginBtn = document.querySelector('.login-btn');

if (registerBtn) {
    registerBtn.onclick = () => container.classList.add('active');
}

if (loginBtn) {
    loginBtn.onclick = () => container.classList.remove('active');
}

function toggleRegister() {
    container.classList.add('active');
}

function toggleLogin() {
    container.classList.remove('active');
}
