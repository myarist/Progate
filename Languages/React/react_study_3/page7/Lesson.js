import React from 'react';

class Lesson extends React.Component {
  constructor(props) {
    super(props);
    this.state = {isModalOpen: false};
  }

  render() {
    // Deklarasikan variable modal
    let modal;
    
    // Siapkan pernyataan if
    if (this.state.isModalOpen) {
      modal = (
        <div className='modal'>
          <div className='modal-inner'>
            <div className='modal-header'></div>
            <div className='modal-introduction'>
              <h2>{this.props.name}</h2>
              <p>{this.props.introduction}</p>
            </div>
            <button className='modal-close-btn'>
              Tutup
            </button>
          </div>
        </div>
      );
    }
    
    return (
      <div className='lesson-card'>
        <div className='lesson-item'>
          <p>{this.props.name}</p>
          <img src={this.props.image} />
        </div>
        {/* Hapuskan code dibawah */}
        {/* Sampai disini */}
        
        {/* Tampilkan variable "modal" */}
        {modal}
      </div>
    );
  }
}

export default Lesson;
