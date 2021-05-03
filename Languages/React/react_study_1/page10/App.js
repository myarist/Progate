import React from 'react';

class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {name: 'Ninja Ken'};
  }
  
  render() {
    return (
    	<div>
        {/* Tulis ulang bagian nama dari "Halo, Ninja Ken!" dengan menggunakan state */}
    	  <h1>Halo, {this.state.name}!</h1>
    	  
        <button onClick={() => {console.log('Guru Domba')}}>Guru Domba</button>
        <button onClick={() => {console.log('Ninja')}}>Ninja Ken</button>
      </div>
    );
  }
}

export default App;
