import React, {Component} from 'react';


import { GridWelcome, Container } from './styles';
import SidebarIcons from '../SidebarIcons';
import Logo from '../../images/Logo.png';

class Layout extends Component {
    render() {
        return (
        <>
            <GridWelcome>
                    <SidebarIcons />
                    <Container> 
                        <div>
                            <h1> Fábrica De Softwares </h1>
                            <button> Projetos </button>
                        </div>
                            <img src={Logo} alt="logo do fábrica" /> 
                    </Container>
            </GridWelcome>

        </>
        );
    }
}

export default Layout;