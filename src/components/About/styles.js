import styled from 'styled-components';

export const Container = styled.div`
    background-color: var(--bg-welcome);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    width: 100%;
    margin: 0 auto;
`;

export const Bar = styled.div`
    height: 3vh;
    width: 100%;
    background: var(--circle-color);
`

export const Title = styled.h1`
    margin-top: 5%;
    font-family: 'Roboto', sans-serif;
`;

export const Description = styled.p`

    margin-top: 2%;
    width: 70%;
    font-size: 3vh;
    text-align: center;
    @media screen and (min-width: 320px) and (max-width: 988px) {
        text-align: justify;
    }
`;

export const Advantages = styled.div`
    display: grid;
    grid-gap:  50px;
    height: auto;
    width: 70%;
    margin: 30px auto;
    justify-content: space-around;
    
    @media screen and (min-width: 320px) {
        grid-template-columns: repeat(1,1fr);
    }
    @media screen and (min-width: 550px) {
        grid-template-columns: repeat(2,1fr);
    }
    @media screen and (min-width: 740px) {
        grid-template-columns: repeat(3,1fr);
    }
`;

export const Oportunities = styled.div`
    display: grid;
    height: auto;
    justify-content: center;
`;

export const Circle = styled.div`
    height: 60px;
    width: 60px;
    border-radius: 30px;
    justify-self: center;
    background-color: var(--circle-color);
`;

export const Desc = styled.h1`
    margin-top: 20px;
    font-size: 3vh;
    text-align: center;
    
`;

export const ContainerTeam = styled.div`
    position: relative;
    height: auto;
    width: 60%;
    background-color: orange;
    margin: 100px auto;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    h1 {
        font-size: 3vh;
        font-family: 'Roboto', sans-serif;
        padding-top: 40px;
    }

    img {
        /* z-index: 5; */
        width: 97%;
        height: auto;
        margin: 20px 0 5px 0;
    }
`;

export const Blue = styled.div`
    position: absolute;
    top: 82px;
    width: 65vw;
    height: 90%;
    background-color: var(--bg-project);
    z-index: -1;
    border-radius: 20px;
`;