// Import class Animal dibawah baris ini
import Animal from "./animal.js";

class Dog extends Animal {
  constructor(name, age, breed) {
    super(name, age);
    this.breed = breed;
  }

  info() {
    this.greet();
    console.log(`Nama saya adalah ${this.name}`);
    console.log(`Saya adalah seekor ${this.breed}`);
    console.log(`Saya berusia ${this.age} tahun`);
    const humanAge = this.getHumanAge();
    console.log(`Saya berusia ${humanAge} tahun dalam umur manusia`);
  }

  getHumanAge() {
    return this.age * 7;
  }
}

// Export class Dog dibawah baris ini
export default Dog;
