import React from 'react';
// Import component Lesson 
import Lesson from './Lesson';

class Main extends React.Component {
  render() {
    const lessonItem = {
      name: 'HTML & CSS',
      image: 'https://s3-ap-northeast-1.amazonaws.com/progate/shared/images/lesson/react/html.svg'
    }
    
    return (
      <div className='main-wrapper'>
        <div className='main'>
          <div className='copy-container'>
            <h1>Hello, World.</h1>
            <h2>Selamat datang didunia pemrograman!</h2>
          </div>
          <div className='lesson-container'>
            <h3 className='section-title'>Pelajaran</h3>
            {/* Tampilkan component Lesson dan teruskan nilai props-nya */}
            <Lesson/>
              name= {lessonItem.name}
              image= {lessonItem.image}
          </div>
        </div>
      </div>
    );
  }
}

export default Main;
