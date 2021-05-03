import React from 'react';

class Main extends React.Component {
  render() {
    return (
      <div className='main-wrapper'>
        <div className='main'>
          <div className='copy-container'>
            <h1>Hello, World.</h1>
            <h2>Selamat datang didunia pemrograman!</h2>
          </div>
          <div className='lesson-container'>
            <h3 className='section-title'>Pelajaran</h3>
            <div className='lesson-card'>
              <div className='lesson-item'>
                <p>HTML & CSS</p>
                <img src='https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/html.svg' />
              </div>
            </div>
            <div className='lesson-card'>
              <div className='lesson-item'>
                <p>Sass</p>
                <img src='https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/sass.svg' />
              </div>
            </div>
            <div className='lesson-card'>
              <div className='lesson-item'>
                <p>JavaScript</p>
                <img src='https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/es6.svg' />
              </div>
            </div>
            <div className='lesson-card'>
              <div className='lesson-item'>
                <p>React</p>
                <img src='https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/react.svg' />
              </div>
            </div>
          </div>
        </div>
      </div>
    );
  }
}

export default Main;
