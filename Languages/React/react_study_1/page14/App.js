import React from 'react';

class App extends React.Component {
  constructor(props) {
    super(props);
    this.state = {count: 0};
  }
  
  // Buat method handleClick
  handleClick() {
    this.setState({count: this.state.count + 1});
  }
  
  render() {
    return (
      <div>
        <h1>
          {this.state.count}
        </h1>
        {/* tambahkan event onClick di tag <button> */}
        <button onClick={() => {this.handleClick()}}>+</button>
        
      </div>
    );
  }
}

export default App;
