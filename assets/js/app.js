import '../styles/styles.scss';
import {Project} from "./Project";
import gameSiteThumbnails from '../img/gameSiteThumbnail.png';
import anime from 'animejs/lib/anime.es.js';

anime({
    targets: '.homeContainer',
    scale: [0, 1],
    duration: 1500,
},);

const test1 = new Project('GameSite', gameSiteThumbnails, 'https://gamesite.noziho.com', 'https://github.com/Noziho/gameSite');
test1.setProject();

const test2 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test2.setProject();

const test3 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test3.setProject();

const test4 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test4.setProject();

const test5 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test5.setProject();

const test6 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test6.setProject();


anime({
    targets: '.project',
    translateX: [-2500, 0],
    delay: anime.stagger(100, {start: 100}),
},);

anime({
    targets: '.projectTitle',
    translateX: [-2500, 0],
    delay: anime.stagger(400, {start: 300}),
},);