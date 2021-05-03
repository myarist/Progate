import React from 'react';

class ContactForm extends React.Component {
  render() {
    return (
      <div className='contact-form'>
        <form>
          <p>Alamat Email (wajib diisi)</p>
          {/* Tambahkan tag input */}
          <input />
          <p>Pesan (wajib diisi)</p>
          {/* Tambahkan tag textarea */}
          <textarea />
          {/* Tambahkan tombol kirim */}
          <input
            type='submit'
            value='Kirim'
          />
        </form>
      </div>
    );
  }
}

export default ContactForm;
