const characters = [
  {name: "Ninja Ken", age: 14},
  {name: "Guru Domba", age: 100},
  {name: "Baby Ninja Ben", age: 5},
  {name: "Birdie"}
];

for (let i = 0; i < characters.length; i++) {
  console.log("--------------------");
  
  const character = characters[i];
  
  console.log(`Nama saya adalah ${character.name}`);
  
  // Tambahkan statement if dibawah
  if (character.age === undefined) {
    console.log("Umur saya rahasia!");
  } else {
    console.log(`Saya berumur ${character.age} tahun`);
  }
  
  
}
