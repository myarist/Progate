import React from 'react';
import Language from './Language';

class App extends React.Component {
  render() {
    return (
      <div>
        <h1>List of Languages</h1>
        <div className='language'>
          {/* tambahkan props untuk HTML & CSS */}
          <Language 
            name='HTML & CSS'
            image='https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/html.svg'
            
          />
          {/* tambahkan props untuk JavaScript */}
          <Language 
            name='JavaScript'
            image='https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/es6.svg'
            
          />
          {/* tambahkan props untuk React */}
          <Language 
            name='React'
            image='https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/react.svg'
            
          />
        </div>
      </div>
    );
  }
}

export default App;