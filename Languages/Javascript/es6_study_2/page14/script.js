const characters = [
  {name: "Ninja Ken", age: 14},
  {name: "Guru Domba", age: 100},
  {name: "Baby Ninja Ben", age: 5},
  // Tambahkan element dibawah
  {name:"Birdie"}
];

for (let i = 0; i < characters.length; i++) {
  console.log("--------------------");
  
  const character = characters[i];
  
  console.log(`Nama saya adalah ${character.name}`);
  console.log(`Saya berumur ${character.age} tahun`);
}
