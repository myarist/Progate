import React from 'react';

class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {name: 'Ninja Ken'};
  }
  
  render() {
    return (
    	<div>
    	  <h1>Halo, {this.state.name}!</h1>
    	  {/* Ubah state untuk event onClick */}
        <button onClick={() => {this.setState({name: 'Guru Domba'})}}>Guru Domba</button>
        
    	  {/* Ubah state untuk event onClick */}
        <button onClick={() => {this.setState({name: 'Ninja Ken'})}}>Ninja Ken</button>
        
      </div>
    );
  }
}

export default App;
