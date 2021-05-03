import React from 'react';

class Language extends React.Component {
  render() {
    return (
      <div className='language-item'>
        {/* Gantikan code dibawah agar mendisplay props name */}
        <div className='language-name'>{this.props.name}</div>
        
        {/* Gantikan nilai atribut src agar mendisplay props image */}
        <img 
          className='language-image'
          src={this.props.image}
        />
        
      </div>
    );
  }
}

export default Language;