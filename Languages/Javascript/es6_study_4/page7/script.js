class Animal {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }
  
  // Tambahkan method greet
  greet() {
    console.log("Halo");
  }
  
}

const animal = new Animal("Leo", 3);

console.log(`Nama: ${animal.name}`);
console.log(`Usia: ${animal.age}`);

// Panggil method greet milik animal instance
animal.greet();