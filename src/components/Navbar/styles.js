import styled from 'styled-components';

export const NavbarContainer = styled.nav`
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 8vh;
    background-color: var(--bg-welcome);
    font-family: 'Roboto', sans-serif;
`;

export const Ul = styled.ul`
     display: flex;
     flex-flow: row nowrap;
     justify-content: space-around;
     align-items: center;
     width: 35%;
     margin-left: 25%;
     li {
         list-style: none;
         a {
             color: rgb(226,226,226);
             text-decoration: none;
             letter-spacing: 3px;
             font-weight: bold;
             font-size: 14px;
         }
     }

  @media (max-width: 600px) {
    flex-flow: column nowrap;
    background-color: #d9d9d9;
    position: fixed;
    transform: ${({ open }) => open ? 'translateX(0)' : 'translateX(100%)'};
    top: 0;
    right: 0;
    height: 100vh;
    width: 50%;
    transition: transform 0.5s ease-in;
    li {
      color: #000;
    }
  }
`;

export const IconToggle = styled.div`
    width: 2rem;
    height: 2rem;
    position: fixed;
    top: 15px;
    right: 20px;
    z-index: 20;
    display: none;
  
    @media (max-width: 600px) {
        display: flex;
        justify-content: space-around;
        flex-flow: column nowrap;
    }

    div {
        width: 2rem;
        height: 0.25rem;
        background-color: ${ ({ open }) => open ? '#000' : '#333' };
        border-radius: 10px;
        transform-origin: 1px;
        transition: all 0.3s linear;
        &:nth-child(1) {
            transform: ${ ({ open }) => open ? 'rotate(45deg)' : 'rotate(0)' };
        }
        &:nth-child(2) {
            transform: ${ ({ open }) => open ? 'translateX(100%)' : 'translateX(0)' };
            opacity: ${ ({ open }) => open ? 0 : 1 };
        }
        &:nth-child(3) {
            transform: ${ ({ open }) => open ? 'rotate(-45deg)' : 'rotate(0)' };
        }
    }
`; 

export const Options = styled.div`
    width: 50px;
    height: 20px;
    background: red;
`;