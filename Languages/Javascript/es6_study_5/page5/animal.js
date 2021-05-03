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

export default Animal;