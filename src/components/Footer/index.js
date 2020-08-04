import React, { Component } from 'react';

import LogoSGE from '../../images/Logo.png';

import { 
    Container,
    Members,
    Title,
    Grid,
    TeamA,
    Names,
    TeamB,
    SocialMedia,
    Socials,
    Facebook,
    Twitter,
    Github,
    Dribbble,
    Made,
    Logo,
    ContentFooter
} from './styles'; 


class Footer extends Component {
    render() {
        return (
            <>
            <Container>
                <Members>
                    <Title> Dedicado aos Membros </Title>
                    <Grid>
                        <TeamA>
                            <Names> Pedro Gois </Names>
                            <Names> Vinicius Zevarex </Names>
                            <Names> Bruno Schanoski </Names>
                            <Names> Samuel Fachetti </Names>
                        </TeamA>
                        <TeamB>
                            <Names> João Morais </Names>
                            <Names> Rafael Campos </Names>
                            <Names> Lucas Cavalherie </Names>
                            <Names> Neemias Borges </Names>
                        </TeamB>
                    </Grid>
                </Members>
                <SocialMedia>
                    <Title> Contato </Title>
                    <Socials>
                        <Facebook />
                            <Twitter /> 
                            <Github />
                            <Dribbble />
                    </Socials>
                </SocialMedia>
                <Made>
                    <Title> Desenvolvido Por: </Title>
                    <Logo src={LogoSGE} alt="Logo_Fábrica" />
                </Made>
            </Container>
            <ContentFooter>
                <span>Copyright &#169; 2020 Fábrica de Softwares ITP - IFSP - Todos os direitos reservados</span>
            </ContentFooter>
            </>
        )
    }
}


export default Footer;