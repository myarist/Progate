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
    console.log(`Saya berusia ${this.age} tahun`);
  }
}

class Dog extends Animal {
}

// Terapkan instance class Dog ke constant dog
const dog = new Dog("Leo", 4);

// Panggil method info dari constant dog
dog.info();
