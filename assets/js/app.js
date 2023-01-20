import '../styles/styles.scss';
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

import Typed from 'typed.js';

let options = {
    strings: ['About me.'],
    typeSpeed: 90
};

let typed = new Typed('#title', options);

const success = document.querySelector('.success');
const error = document.querySelector('.error');
const addLinksButton = document.querySelector('#addLinks');

if (success) {
    setTimeout(() => {
        success.remove();
    }, 3000);

    success.addEventListener("click",() => {
        success.remove();
    })
}

if (error) {
    setTimeout(() => {
        error.remove();
    }, 3000)

    error.addEventListener("click",() => {
        error.remove();
    })
}
