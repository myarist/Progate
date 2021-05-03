const numbers = [1, 3, 5, 7, 9];

// Temukan kelipatan 3 dari array numbers dengan menggunakan method find
// dan tetapkan hasilnya ke constant foundNumber 
const foundNumber = numbers.find((number) => {
  return number % 3 === 0
});



// Print foundNumber
console.log(foundNumber);


const characters = [
  {id: 1, name: "Ninja Ken", age: 6},
  {id: 2, name: "Baby Ben", age: 2},
  {id: 3, name: "Guru Domba", age: 100},
  {id: 4, name: "Birdie", age: 21}
];

// Temukan object dengan id = 3 dari constant characters,
// dan tetapkan nilainya ke constant foundCharacter
const foundCharacter = characters.find((character) => {
  return character.id === 3;
});

// Print foundCharacter
console.log(foundCharacter);