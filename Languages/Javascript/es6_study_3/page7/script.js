const check = (number) => {
  // periksa apakah number adalah kelipatan dari 3 dan return-kan hasilnya
  return number % 3 === 0;
};

// Panggil function check dalam kondisi statement if
if ( check(123) ) {
  console.log("Multiple of 3");
} else {
  console.log("Not a multiple of 3");
}
