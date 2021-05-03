// Definisikan constant animal
const animal = {
  name: "Leo",
  age: 3,
  greet: () => {
    console.log("Halo");
  }
}

// Print property name milik constant animal
console.log(animal.name);

// Panggil greet method property milik animal
animal.greet();
