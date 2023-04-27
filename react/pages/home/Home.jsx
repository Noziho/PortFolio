import '../../../assets/styles/App.css'
import {Header} from "../../components/Header/Header";
import {AboutMe} from "../../components/AboutMe/AboutMe";
import {ProjectList} from "../../components/ProjectsList/ProjectList";
import {Footer} from "../../components/Footer/Footer";


export const Home = function () {
    return (
        <>
            <Header />
            <div className={"container"}>
                <AboutMe />
                <ProjectList />
                <Footer />
            </div>
        </>
    )
}