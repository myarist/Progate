import React from 'react';

class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {name: 'Ninja Ken'};
  }
  handleClick(name) {
    this.setState({name: name});
  }
  render() {
    return (
    	<div>
    	  <h1>Halo, {this.state.name}!</h1>
        <button onClick={() => this.handleClick('Guru Domba')}>Guru Domba</button>
        <button onClick={() => this.handleClick('Ninja Ken')}>Ninja Ken</button>
      </div>
    );
  }
}

export default App;
