import './ProjectList.css';
import {useEffect, useState} from 'react';
import {Project} from "../Project/Project";

export const ProjectList = function () {
    const [projectList, setProjectList] = useState([]);
    useEffect(() => {
        async function getProjects() {
            const data = await fetch('/api/projects');
            setProjectList(await data.json());
        }

        getProjects()
            .catch(() => console.log('Erreur de récupération des projets'));
    }, [])

    return (
        <>
            <h1 id={'projectTitle'} className={'projectsTitle'} data-aos="fade-up">Mes projets:</h1>
            <div className={"projects"}>
                {projectList.map((project) => <Project key={project.id} project={project}/>)}
            </div>
        </>
    )
}