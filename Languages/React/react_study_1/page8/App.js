import React from 'react';

class App extends React.Component {
  render() {
    return (
    	<div>
    	  <h1>Halo, Ninja Ken!</h1>
        {/* Tambahkan event onClick didalam tag button, yang berfungsi untuk mencetak nama di console */}
        <button onClick={() => {console.log("Guru Domba")}}>Guru Domba</button>
        
        {/* Tambahkan event onClick didalam tag button, yang berfungsi untuk mencetak nama di console */}
        <button onClick={() => {console.log("Ninja Ken")}}>Ninja Ken</button>
        
      </div>
    );
  }
}

export default App;
