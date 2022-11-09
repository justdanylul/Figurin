const login = document.querySelector('.login-btn');
const register = document.querySelector('.register-btn');
const trans = document.querySelector('.transit');
const trans2 = document.querySelector('.trans2');
const login_box = document.querySelector('.login__part');
const register_box = document.querySelector('.register__part')
const box = document.querySelector('.box');

register.addEventListener('click', () => {
    trans.style.display = 'block';
    trans2.style.display = 'none';
    box.style.transform = "translateY(-520px)";
    // login_box.style.animation = "hide 0.2s 0.2s forwards"
    // register_box.style.animation = "show 0.5s 0.2s forwards"
})

login.addEventListener('click', () => {
    trans2.style.display = 'block';
    trans.style.display = 'none';
    box.style.transform = "translateY(0px)";
    // login_box.style.animation = "show 0.2s 0.2s forwards"
    // register_box.style.animation = "hide 0.1s 0.2s forwards"
})

