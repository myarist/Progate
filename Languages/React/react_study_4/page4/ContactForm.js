import React from 'react';

class ContactForm extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      isSubmitted: false,
    };
  }

  /* Deklarasikan method handleSubmit  */
  handleSubmit() {
    this.setState({isSubmitted: true});
  }

  render() {
    let contactForm;
    if (this.state.isSubmitted) {
      contactForm = (
        <div className='contact-submit-message'>
          Pesan Terkirim
        </div>
      );
    } else {
      contactForm = (
        /* Tambahkan onSubmit ke tag form */
        <form onSubmit={() => {this.handleSubmit()}} >
          <p>Alamat Email (wajib diisi)</p>
          <input />
          <p>Pesan (wajib diisi)</p>
          <textarea />
          <input
            type='submit'
            value='Kirim'
          />
        </form>
      );
    }
    
    return (
      <div className='contact-form'>
        {contactForm}
      </div>
    );
  }
}

export default ContactForm;
