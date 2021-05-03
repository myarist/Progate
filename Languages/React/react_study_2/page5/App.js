import React from 'react';
import Language from './Language';

class App extends React.Component {
  render() {
    return (
      <div>
        <h1>List of Languages</h1>
        <div className="language">
          <Language />
          {/* Panggil component Language sebanyak dua kali */}
          <Language/>
          <Language/>
        </div>
      </div>
    );
  }
}

export default App;
