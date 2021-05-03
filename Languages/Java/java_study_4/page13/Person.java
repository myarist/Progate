class Person {
  // Deklarasikan field class `count` dengan tipe data `int` dan tetapkan padanya nilai `0`
  public static int count = 0;
  public String firstName;
  public String lastName;
  public int age;
  public double height, weight;

  Person(String firstName, String lastName, int age, double height, double weight) {
    // Lakukan increment (penambahan) dengan 1 pada variable `count`
    Person.count++;
    
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;
    this.height = height;
    this.weight = weight;
  }

  public String fullName() {
    return this.firstName + " " + this.lastName;
  }

  public double bmi() {
    return this.weight / this.height / this.height;
  }
  
  public void printData() {
    System.out.println("Nama saya " + this.fullName() + ".");
    System.out.println("Saya berusia " + this.age + " tahun.");
    System.out.println("Nilai BMI saya " + Math.round(this.bmi()) + ".");
  }
}
