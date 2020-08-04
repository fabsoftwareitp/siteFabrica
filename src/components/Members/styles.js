import styled, { css } from 'styled-components';
import SwapHorizIcon from '@material-ui/icons/SwapHoriz';
import LinkedInIcon from '@material-ui/icons/LinkedIn';
import GitHubIcon from '@material-ui/icons/GitHub';
import InstagramIcon from '@material-ui/icons/Instagram';


import ReactCardFlip from 'react-card-flip';

export const Container = styled.div`
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    height: auto;
    width: 80%;
    margin: 30px auto;
    justify-content: center;
    align-items: center;

    @media screen and (max-width: 950px) {
        grid-template-columns: repeat(2, 1fr);
    }

    @media screen and (max-width: 675px) {
        grid-template-columns: repeat(1, 1fr);
        display: flex;
        flex-direction: column;
        justify-content: space-around;
        align-self: center;    
    }
`;

export const Card = styled(ReactCardFlip)`
    display: grid;
    width: 100%;
    margin: 0 10px;
`;

export const Front = styled.div`
    height: auto;
    width: 330px;
    @media screen and (max-width: 675px) {
        margin-top: 20px;
    }
`;

export const Back = styled.div`
    height: auto;
    width: 320px;
    @media screen and (max-width: 675px) {
        margin-top: 20px;
    }
`;

export const CardHeader = styled.div`
    height: 80px;
    background: purple;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
`;

export const CardBody = styled.div`
    position: relative;
    height: auto;
    background: orange;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
`;


export const Radius = styled.div`
    height: 90px;
    width: 90px;
    border-radius: 45px;
    background-color: gray;
    border: 2px solid red;
    display: flex;
    align-self: center;
    position: relative;
    bottom: 30px;
`;

export const Photo = styled.img`
    width: 100%;
    object-fit: cover;
`;

export const Title = styled.h1`
    font-size: ${props => props.FontSize+'px'};
    color: #fff;
`;

export const Graduate = styled.p`
    color: rgba(255,255,255,0.8);
    font-size: 14px;    
`;

export const Swap = styled(SwapHorizIcon)`
    margin: 30px auto 10px auto;
    &:hover {
        transform: rotate(180deg);
        transition: transform 0.2s ease;
    }
`;

export const Description = styled.p`
    font-size: 14px;
    padding: 15px 10px 0 10px;
    text-align: justify;
    height: 130px;
    overflow-y: auto;
    color: #fff;
`;

export const Contact = styled.div`
    height: auto;
    display: flex;
    margin-top: 20px;
    width: 30%;
    justify-content: space-between;
`;

const iconCSS = css`
    height: 45px;
    width: 45px;
    path {
        fill: #000;
    }
`;



export const Linkedin = styled(LinkedInIcon)`
    ${iconCSS};
    &:hover {
        path {
            fill:#2867B2;
        }
        box-shadow: 0 0 15px #2867B2;
        transition: all 0.5s ease;
        background: transparent;
    }
`;

export const Github = styled(GitHubIcon)`
    ${iconCSS};
    &:hover {
        box-shadow: 0 0 15px #001;
        transition: all 0.5s ease;
    }
`;



export const Instagram = styled(InstagramIcon)`
    ${iconCSS};
    &:hover {
        path {
            fill:#bc2a8d;
        }
        box-shadow: 0 0 15px #bc2a8d;
        transition: all 0.5s ease;
    }
`; 

