class Animal {
  constructor(name, age) {
    this.name = name;
    this.age = age;
  }
  
  greet() {
    console.log("Halo");
  }
  
  info() {
    // Panggil method greet
    this.greet();
    
    console.log(`Nama saya adalah ${this.name}`);
    console.log(`Saya berumur ${this.age} tahun`);
  }
}

const animal = new Animal("Leo", 3);
// Hapus baris dibawah


animal.info();
