import styled from 'styled-components';

export const SidebarContainer = styled.nav`
    background-color: var(--bg-welcome);
    grid-area: 'Sidebar';
    ul {
        margin-left: 30px;
        height: 92vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        li {
            list-style: none;
            a {
                display: flex;
                align-items: center;
                height: 4em;
                text-decoration: none;
                &:visited, &:link {
                    text-decoration: none;
                    color: black;
                }
                &:hover {
                transform: rotate(-360deg);
                transition: transform 800ms ease-in;
                }
            }
        }
    }

    @media screen and (max-width: 740px) {
        align-content: flex-end;
        ul {
            border-top: 1px solid rgba(0,0,0, 0.2);
            height: 10vh;
            flex-direction: row;
            li {
                margin: 0 10% 0 10%;
            }
        }
    }

`;

export const SocialMediaIcons = styled.img`
    height: 20px;
    width: 20px;

`;