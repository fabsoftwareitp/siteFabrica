import React, {useState} from 'react';
import Logo from '../../images/logoSGE.png';
import { 
    Container,
    Header,
    Close,
    Toggle,
    Navigation,
    Items,
    Footer,
    Quit,
    LogoutIcon,
    Avatar
} from './styles';

const Sidebar = (props) => {
    const [hidden, setHidden] = useState(false);


  return (
      <>
    <Container hidden={hidden}>
        <Header>
            <Close hidden={hidden} onClick={() => setHidden(!hidden)}/>
        </Header>
        <Navigation>
            <Items> Membros </Items>
            <Items> Projetos </Items>
            <Items> Lista de Chamada (Reuniões)</Items>
        </Navigation>
        <Footer>
            <Avatar src={Logo} alt="foto_perfil" />
            <Quit>
                <span> Sair </span>
                <LogoutIcon />
            </Quit>
        </Footer>
        <Toggle hidden={hidden} onClick={() => setHidden(!hidden)} />
        {props.children}
    </Container>
    </>
  );
}

export default Sidebar;