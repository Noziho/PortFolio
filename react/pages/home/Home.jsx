import '../../../assets/styles/App.css'
import {Header} from "../../components/Header/Header";
import {AboutMe} from "../../components/AboutMe/AboutMe";

export const Home = function () {
    return (
        <>
            <Header />
            <div className={"container"}>
                <AboutMe />
            </div>
        </>
    )
}