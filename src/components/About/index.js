import React, { Component } from 'react';
import Frame from '../../images/Time.jpeg';


import {Container, Bar, Title, Description, Advantages, Oportunities, Circle, Desc, ContainerTeam, Blue} from './styles';

class About extends Component {
    render() {
        return (
            <>
            <Container>
                <Bar />
                <Title>Sobre o projeto</Title>
                <Description>Fárica de Softwares foi uma iniciativa liderada pelo Me. Danilo Camargo Bueno,
                    teve como principais pilares: O desenvolvimento, prática e evolução nos âmbitos da criação de
                    sistemas. Os participantes do projeto podem ter as seguintes oportunidades.
                </Description>
            </Container>
            <Advantages>
                <Oportunities>
                    <Circle />
                    <Desc>Conhecer novos desafios e diferentes tecnologias</Desc>
                </Oportunities>
                <Oportunities>
                    <Circle />
                    <Desc>Festinha todo mês, só falto a breja, mas ta valendo</Desc>
                </Oportunities>
                <Oportunities>
                    <Circle />
                    <Desc>Pegar os lanches da turma da tarde na CAE</Desc>
                </Oportunities>
            </Advantages>
            <ContainerTeam>
                <h1> Time Fábrica de Softwares (2019 - 2020)</h1>
                <img id="frame" src={Frame} alt="frame" />
                <Blue />
            </ContainerTeam>
            </>
        )
    }
}

export default About;