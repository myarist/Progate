const number1 = 103;
const number2 = 72;
const number3 = 189;

// Ketik sebuah function getMax untuk mendapatkan nilai maksimum
const getMax = (a, b, c) => {
  let max = a;
  
  if (b > max) {
    max = b;
  } else  if (c > max) {
    max = c;
  }
  
  return max;
};

// Print "Nilai maksimum adalah __"
const max = getMax(number1, number2, number3);
console.log(`Nilai maksimum adalah ${max}`);
