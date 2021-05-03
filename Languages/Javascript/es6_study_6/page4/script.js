const numbers = [1, 2, 3, 4];

// Dapatkan semua nomor genap dari array numbers dengan menggunakan method filter,
// dan tetapkan hasilnya ke constant evenNumbers 
const evenNumbers = numbers.filter((number) => {
  return number % 2 === 0;
});

// Print nilai evenNumbers
console.log(evenNumbers);


const characters = [
  {id: 1, name:"Ninja Ken", age: 14},
  {id: 2, name:"Baby Ben", age: 5},
  {id: 3, name:"Guru Domba", age: 100}
];

// Dapatkan characters berumur lebih muda dari 20,
// dan tetapkan hasilnya ke constant underTwenty 
const underTwenty = characters.filter((character) => {
  return character.age < 20;
});

// Print nilai underTwenty
console.log(underTwenty);