import React from 'react';

class App extends React.Component {
  // Nyatakan constructor dibawah
  constructor(props) {
    super(props);
    // Penerapan state
    this.state = {name: "Ninja Ken"}
  }
  
  render() {
    return (
    	<div>
    	  <h1>Halo, Ninja Ken!</h1>
        <button onClick={() => {console.log('Guru Domba')}}>Guru Domba</button>
        <button onClick={() => {console.log('Ninja Ken')}}>Ninja Ken</button>
      </div>
    );
  }
}

export default App;
