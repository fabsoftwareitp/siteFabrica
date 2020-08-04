import React, { Component } from 'react';
import { NavbarContainer } from './styles';
import Toggle from './Toggle';


class Navbar extends Component {
    render() {
        return (
            <>
            <NavbarContainer>
                <Toggle />
            </NavbarContainer>
            </>
        );
    }
}

export default Navbar;