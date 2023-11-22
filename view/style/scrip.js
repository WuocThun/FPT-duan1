//form
const container_ = document.getElementById('container_');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

console.log(registerBtn)

registerBtn.addEventListener('click', () => {
    container_.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container_.classList.remove("active");
});
