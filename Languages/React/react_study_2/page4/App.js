import React from 'react';
// import component Language 
import Language from './Language';

class App extends React.Component {
  render() {
    return (
      <div>
        <h1>List of Languages</h1>
        <div className="language">
          {/* panggil component Language */}
          <Language/>
        </div>
      </div>
    );
  }
}

export default App;
