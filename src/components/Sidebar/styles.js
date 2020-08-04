import styled from 'styled-components';
import DehazeIcon from '@material-ui/icons/Dehaze';
import CloseIcon from '@material-ui/icons/Close';
import ExitToAppIcon from '@material-ui/icons/ExitToApp';

export const Container = styled.div`
    position: relative;
    height: 100vh;
    width: 300px;
    background-color: var(--footer-info);
    color: #fff;
    transform: ${({ hidden }) => hidden ? 'translateX(-100%)' : 'translateX(0)'};
    transition: transform 0.5s ease-in;
    display: block;

`;

export const Header = styled.div`

`;

export const Close = styled(CloseIcon)`
    margin: 20px 10px 0 77%;
    font-size: 2.5rem !important;
    visibility: ${({ hidden }) => hidden ? 'hidden' : 'visible' };
`;

export const Toggle = styled(DehazeIcon)`
    position: absolute;
    top: 0;
    left: 300px;
    path {
        fill: #000;
    }
    z-index: 10;
    margin: 20px 0 0 30px;
    font-size: 2.5rem !important;
    visibility: ${({ hidden }) => hidden ? 'visible' : 'hidden' };

`;

export const Navigation = styled.ul`
    display: flex;
    flex-direction: column;
    height: 80%;
    align-items: center;
    justify-content: center;
`;

export const Items = styled.li`
    margin: 50px 0;
    border-bottom: 1px solid #fff;
`;

export const Footer = styled.div`
    display: flex;
    align-items: center;
    height: 9.7%;
    background-color: var(--footer-color);
    justify-content: space-around;
    border-top: 1px solid #fff;
    position: fixed;
    bottom: 0;
    width: 300px;
`;

export const Quit = styled.div`
    display: flex;
    align-items: center;
    width: 30%;
    justify-content: space-around;
    margin-right: 20px;
`;

export const LogoutIcon = styled(ExitToAppIcon)`

`;

export const Avatar = styled.img`
    height: 40px;
    width: 40px;
    object-fit: cover;
`;
