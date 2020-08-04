import React from 'react';

import { SidebarContainer, SocialMediaIcons } from './styles';
import Facebook from '../../images/icones/facebook.svg';
import Instagram from '../../images/icones/instagram.svg';
import Twitter from '../../images/icones/twitter.svg';

function SidebarIcons() {

        return (
            <SidebarContainer> 
                <ul>
                    <li> 
                        <a href="/">
                            <SocialMediaIcons src={Facebook} />
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <SocialMediaIcons src={Instagram} />
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <SocialMediaIcons src={Twitter} />
                        </a>
                    </li>
                </ul>
            </SidebarContainer>
        );
}

export default SidebarIcons;