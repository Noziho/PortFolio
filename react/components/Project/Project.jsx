import './Project.css';
import {Link} from "react-router-dom";
export const Project = function ({project}) {
    return (
        <div className={'project'} data-aos="fade-up">
            <div>
                <h1>{project.name.toUpperCase()}</h1>
            </div>

            <div className={'thumbnailContainer'}>
                <img className={"thumbnail"} src={"/uploads/" + project.image} alt="projectImage"/>
            </div>

            <div>
                <p>{project.description}</p>
            </div>

            <div className={"linkContainer"}>
                <Link to={project.githubLink}>Lien GitHub</Link>
                <Link to={project.prodLink}>Lien de production</Link>
            </div>
        </div>
    )
}