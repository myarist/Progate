class Animal {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }
  
  greet() {
    console.log("Halo");
  }
  
  info() {
    this.greet();
    console.log(`Nama saya adalah ${this.name}`);
    console.log(`Saya berumur ${this.age} tahun`);
  }
}

// Definisikan class Dog agar dapat menerima warisan dari class Animal
class Dog extends Animal {
  
}


const animal = new Animal("Leo", 3);
animal.info();
