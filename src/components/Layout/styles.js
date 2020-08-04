import styled from 'styled-components';

export const GridWelcome = styled.div`
    display: grid;
    grid-template-areas:
    'Sidebar Text';
    grid-template-columns: 4rem auto;

    @media screen and (max-width: 740px) {
        display: flex;
        flex-direction: column-reverse;
        height: 92vh;
    }

`;

export const Container = styled.div`
    grid-area: 'Text';
    display: flex;
    align-items: center;
    background-color: var(--bg-welcome);
    height: 92vh;
    justify-content: space-evenly;
    div {
        h1 {
            font-family: 'Roboto', sans-serif;
            
            font-size: 10vh;
            width: 7em;
            align-self: center;
        }
        button {
            width: 90px;
            margin-left: 20.5%;
            border: none;
            background-color: var(--circle-color);
            color: white;
            border-radius: 5px;
            padding: 10px 5px;
            cursor: pointer;
        }
    }

    @media screen and (max-width: 740px) {
        height: 82vh;
        flex-direction: column;
        div {
            h1 {
                font-size: 8vh;
                text-align: center;
            }
        }
    }
`;

