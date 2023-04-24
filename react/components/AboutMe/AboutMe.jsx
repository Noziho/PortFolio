import './AboutMe.css'
import {useEffect} from "react";

export const AboutMe = function () {

    useEffect(() => {
        const text = "À propos de moi.";
        const textContainer = document.querySelector("#title");
        let index = 0;

        setInterval(() => {
            if (index < text.length) {
                textContainer.innerHTML += text[index];
                index++;
            }
        }, 80);

    })
    return (
        <div className="spacer">
            <div className="presentation">
                <h1 id="title"></h1>
                <div id="cursor"></div>
                <div id="personalInformation">
                    <p>Nom: <span className="info">Decroix</span></p>
                    <p>Prénom: <span className="info">Noah</span></p>
                    <p>Âge: <span className="info">20</span></p>
                    <p>Passion: <span className="info">Dév web, nouvelles tech, jeux vidéos</span></p>
                </div>
                <div id="skills">
                    <h3>Compétences: </h3>
                    <div id="frontSkills">
                        <h3 className="info">Front: </h3>
                        <p>HTML</p>
                        <p>CSS/SCSS</p>
                        <p>JavaScript/TypeScript/Jquery</p>
                        <p>Webpack/NPM</p>
                    </div>

                    <div id="backSkills">
                        <h3 className="info">Back: </h3>
                        <p>PHP</p>
                        <p>SQL</p>
                        <p>Symfony</p>
                        <p>Utilisations d'ORM, RedBean, Doctrine</p>
                        <p>Composer</p>
                    </div>
                </div>
            </div>
            <div id="intro">
                <h2>Recherche :</h2>
                <p>Je suis actuellement à la recherche d'un stage d'une durée de 3 mois du 9 Mai au 28 Juillet dans
                    l'objectif de validé ma formation CDA (concepteur développeur d'application).</p>
                <p>Le projet effectué en stage ou l'un des projets effectué sera le sujet de mon oral de fin d'année
                    permettant de validé ma formation et l'obtention du diplôme.</p>
            </div>

            <div id="myProjects">
                <a href=""><i className="fa-solid fa-circle-arrow-down"></i></a>
            </div>
        </div>
    )
}