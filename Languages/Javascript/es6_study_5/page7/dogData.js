// Import readline-sync
import readlineSync from "readline-sync";
import Dog from "../class/dog";

const dog1 = new Dog("Leo", 4, "Chihuahua");

// Tulis ulang dengan menggunakan readlineSync.question
const name = readlineSync.question("Ketik nama Anda: ");

// Tulis ulang dengan menggunakan readlineSync.questionInt
const age = readlineSync.questionInt("Ketik usia Anda: ");

// Tulis ulang dengan menggunakan readlineSync.question
const breed = readlineSync.question("Ketik ras Anda: ");

const dog2 = new Dog(name, age, breed);

export { dog1, dog2 };