import React, { Component } from 'react';
import GlobalStyles from './styles';

import Routes from './routes';

class App extends Component {
  render() {
    return (
      <>
      <Routes />
      <GlobalStyles />
      </>
    )
  }
}

export default App;
