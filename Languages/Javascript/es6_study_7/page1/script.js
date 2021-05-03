const printKen = () => {
  console.log("Ninja Ken");
};

const printMaster = () => {
  console.log("Guru Domba");
};

const call = (callback) => {
  console.log("Memanggil function callback.");
  callback();
};

// Ketik ulang argument ini sebagai printMaster dan konfirmasikan output-nya
call(printMaster);
