import React from 'react';

class Language extends React.Component {
  render() {
    return (
      <div className='language-item'>
        <div className='language-name'>{this.props.name}</div>
        <img 
          className='language-image' 
          src={this.props.image} 
        />
      </div>
    );
  }
}

export default Language;