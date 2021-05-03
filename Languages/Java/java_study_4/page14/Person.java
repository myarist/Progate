class Person {
  public static int count = 0;
  public String firstName, lastName;
  public int age;
  public double height, weight;

  Person(String firstName, String lastName, int age, double height, double weight) {
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

  public void printData() {
    System.out.println("Nama saya " + this.fullName() + ".");
    System.out.println("Saya berusia " + this.age + " tahun.");
    System.out.println("Nilai BMI saya " + Math.round(this.bmi()) + ".");
  }

  public double bmi() {
    return this.weight / this.height / this.height;
  }

  // Definisikan method class `printCount`
  public static void printCount() {
    System.out.println("Total: " + Person.count + " orang.");
  }
}
