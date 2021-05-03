import React from 'react';

class App extends React.Component {
  render() {
    // Nyatakan constant name 
    const name = "Ninja Ken";
    
    // Nyatakan constant imgUrl 
    const imgUrl = "https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/kentheninja.png";
    
    return (
      <div>
        {/* Gunakan constant name untuk menampilkan "Ninja Ken" */}
        <h1>{name}</h1>
        
        {/* Gunakan constant imgUrl untuk menampilkan gambar */}
        <img src={ imgUrl } />
        
      </div>
    );
  }
}

export default App;
