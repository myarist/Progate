import React from 'react';

class App extends React.Component {
  constructor(props) {
    super(props);
    // Tentukan state
    this.state = {count: 0};
    
  }
  
  render() {
    return (
      <div>
        <h1>
          {/* Tampilkan nilai state */}
          {this.state.count}
          
        </h1>
        {/* Tambahkan tag <button> */}
        <button>+</button>
        
      </div>
    );
  }
}

export default App;
