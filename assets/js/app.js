import '../styles/styles.scss';
import {Project} from "./Project";
import gameSiteThumbnails from '../img/gameSiteThumbnail.png'

let test1 = new Project('GameSite', gameSiteThumbnails, 'https://gamesite.noziho.com', '');
test1.setProject();

let test2 = new Project('test', 'tete', 'https://google.fr', 'https://github.com/Noziho/gameSite');
test2.setProject();

let test3 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test3.setProject();

let test4 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test4.setProject();

let test5 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test5.setProject();

let test6 = new Project('test', 'tete', 'https://google.fr', 'https://moodle.up-to.fr/course/view.php?id=17&sectionid=814');
test6.setProject();

