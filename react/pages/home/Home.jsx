import '../../../assets/styles/App.css'
import {Header} from "../../components/Header/Header";
import {AboutMe} from "../../components/AboutMe/AboutMe";
import {ProjectList} from "../../components/ProjectsList/ProjectList";


export const Home = function () {
    return (
        <>
            <Header />
            <div className={"container"}>
                <AboutMe />
                <ProjectList />
            </div>
        </>
    )
}