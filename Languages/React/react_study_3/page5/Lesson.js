import React from 'react';

class Lesson extends React.Component {
  render() {
    return (
      <div className='lesson-card'>
        <div className='lesson-item'>
          <p>{this.props.name}</p>
          <img src={this.props.image} />
        </div>
        {/* Siapkan modalnya */}
        <div className='modal'>
          <div className='modal-inner'>
            <div className='modal-header'></div>
            <div className='modal-introduction'>
              {/* Tampilkan nama pelajaran */}
              <h2>{this.props.name}</h2>
              
              {/* Tampilkan pengantar pelajaran */}
              <p>{this.props.introduction}</p>
              
            </div>
            <button className='modal-close-btn'>
              Tutup
            </button>
          </div>
        </div>
      </div>
      
    );
  }
}

export default Lesson;
