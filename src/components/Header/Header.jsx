import './Header.css';
import nozihoLogo from '../../assets/img/Noziho-transformed.png'
import { Link } from "react-router-dom";
export const Header = function () {
    return(
        <header>
            <Link to="/">
                <img id='nozihoLogo' src={nozihoLogo} alt=""/>
            </Link>
        </header>
    )
}