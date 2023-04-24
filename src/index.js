import React from 'react';
import ReactDOM from 'react-dom/client';
import {BrowserRouter, Route, Routes} from "react-router-dom";
import {Home} from "./pages/home/Home";
import {Contact} from "./pages/Contact/Contact";
import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init();

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(
    <BrowserRouter>
        <Routes>
            <Route path="/" element={<Home />} />
            <Route path="/contact" element={<Contact />} />
        </Routes>
    </BrowserRouter>
);

