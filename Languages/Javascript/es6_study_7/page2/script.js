const printKen = () => {
  console.log("Ninja Ken");
};

// Tambahkan parameter callback ke function call
const call = (callback) => {
  console.log("Memanggil function callback.");
  // Panggil callback function
  callback();
};

// Teruskan printKen sebagai argument dan jalankan function call
call(printKen);
