class Animal {
  constructor() {
    // Tetapkan nilai string「Leo」ke property name
    this.name = "Leo";
    
    // Tetapkan nilai「3」ke property age
    this.age = 3;
  }
}

const animal = new Animal();

// Print「Nama: ____」
console.log(`Nama: ${animal.name}`);

// Print「Usia: __」
console.log(`Usia: ${animal.age}`);
