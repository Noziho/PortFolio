import '../styles/styles.scss';
import {Project} from "./Project";
import gameSiteThumbnails from '../img/gameSiteThumbnail.png';
import '/assets/img/Noziho.png';
import '/assets/img/Noziho-transformed.png'

import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();

import Typed from 'typed.js';

let options = {
    strings: ['About me.'],
    typeSpeed: 90
};

let typed = new Typed('#title', options);


const test1 = new Project('GameSite', gameSiteThumbnails, 'https://gamesite.noziho.com', 'https://github.com/Noziho/gameSite');
test1.setProject();

const test2 = new Project('test', 'tete', 'https://google.fr', 'https://google.fr');
test2.setProject();

const test3 = new Project('test', 'tete', 'https://google.fr', 'https://google.fr');
test3.setProject();

const test4 = new Project('test', 'tete', 'https://google.fr', 'https://google.fr');
test4.setProject();

const test5 = new Project('test', 'tete', 'https://google.fr', 'https://google.fr');
test5.setProject();

const test6 = new Project('test', 'tete', 'https://google.fr', 'https://google.fr');
test6.setProject();
