import '../styles/styles.scss';
import AOS from 'aos';
import 'aos/dist/aos.css';

const success = document.querySelector('.success');
const error = document.querySelector('.error');

AOS.init();

if (document.querySelector('#title')) {
    const text = "À propos de moi.";
    const textContainer = document.querySelector("#title");
    let index = 0;

    setInterval(() => {
        if (index < text.length) {
            textContainer.innerHTML += text[index];
            index++;
        }
    }, 80);
}


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
