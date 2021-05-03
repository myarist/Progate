const numbers = [1, 2, 3, 4];

// Buatlah array baru di constant numbers dengan menggunakan method map,
// dan tetapkan hasilnya ke constant doubledNumbers 
const doubledNumbers = numbers.map((number) => {
  return number * 2;
});

// Print constant doubledNumbers
console.log(doubledNumbers);


const names = [
  {firstName: "Kate", lastName: "Jones"},
	{firstName: "John", lastName: "Smith"},
	{firstName: "Dennis", lastName: "Williams"},
	{firstName: "David", lastName: "Black"}
];

// Buatlah array baru didalam constant names dengan menggunakan method map,
// dan tetapkan sebagai constant fullNames
const fullNames = names.map((name) => {
  return name.firstName + " " + name.lastName;
});

// Print constant fullNames
console.log(fullNames);