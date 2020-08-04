import React, { useState } from 'react';
import Avatar from '../../images/logoSGE.png';

import { 
    Container,
    Card,
    Front,
    Back,
    CardHeader,
    CardBody,
    Radius,
    Photo,
    Title,
    Graduate,
    Swap,
    Description,
    Contact,
    Linkedin,
    Github,
    Instagram
} from './styles';


function Members () {
    const [isFlipped, setIsflipped] = useState();
    const handleClick = (cardif) => {
        setIsflipped(cardif);
    }
    
        return (
            <>
            <Container>
                <Card isFlipped={isFlipped === 1} flipDirection="horizontal">
                    <Front>
                        <CardHeader />
                        <CardBody>
                            <Radius>
                                <Photo src={Avatar} alt="foto_de_perfil" />
                            </Radius>
                            <Title FontSize={24}> João Morais </Title>
                            <Graduate> Aluno </Graduate>
                            <Swap onClick={() => handleClick(1)} />
                        </CardBody>
                    </Front>
                    <Back>
                        <CardHeader> 
                            <Title FontSize={18}> João Morais </Title>
                        </CardHeader>
                        <CardBody>
                            <Description>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus blandit rhoncus. Maecenas id elementum nunc. Aliquam tincidunt porttitor mauris et dapibus. In ultrices, lectus et venenatis viverra, dui libero tempor justo, id viverra massa nunc vitae erat.
                    Phasellus convallis pharetra ante nec pharetra. Donec in 
                    augue aliquet, vestibulum nulla.'
                            </Description>
                            <Contact>
                                <Linkedin />
                                <Github />
                                <Instagram />
                            </Contact>
                            <Swap onClick={handleClick} />
                        </CardBody>
                    </Back>
                </Card>
                <Card isFlipped={isFlipped === 2} flipDirection="horizontal">
                    <Front>
                        <CardHeader />
                        <CardBody>
                            <Radius>
                                <Photo src={Avatar} alt="foto_de_perfil" />
                            </Radius>
                            <Title FontSize={24}> João Morais </Title>
                            <Graduate> Aluno </Graduate>
                            <Swap onClick={() => handleClick(2)} />
                        </CardBody>
                    </Front>
                    <Back>
                        <CardHeader> 
                            <Title FontSize={18}> João Morais </Title>
                        </CardHeader>
                        <CardBody>
                            <Description>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus blandit rhoncus. Maecenas id elementum nunc. Aliquam tincidunt porttitor mauris et dapibus. In ultrices, lectus et venenatis viverra, dui libero tempor justo, id viverra massa nunc vitae erat.
                    Phasellus convallis pharetra ante nec pharetra. Donec in 
                    augue aliquet, vestibulum nulla.'
                            </Description>
                            <Contact>
                                <Linkedin />
                                <Github />
                                <Instagram />
                            </Contact>
                            <Swap onClick={handleClick} />
                        </CardBody>
                    </Back>
                </Card>

            </Container>
            </>
        )
}
export default Members;