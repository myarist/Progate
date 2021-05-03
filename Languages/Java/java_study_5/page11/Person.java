class Person {
  private String firstName;
  private String middleName;
  private String lastName;
  private int age;
  private double height;
  private double weight;

  Person(String firstName, String lastName, int age, double height, double weight) {
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;
    this.height = height;
    this.weight = weight;
  }

  Person(String firstName, String middleName, String lastName, int age, double height, double weight) {
    this(firstName, lastName, age, height, weight);
    this.middleName = middleName;
  }

  public String fullName() {
    if (this.middleName == null) {
      return this.firstName + " " + this.lastName;
    } else {
      return this.firstName + " " + this.middleName + " " + this.lastName;
    }
  }

  public void printData() {
    System.out.println("Nama saya adalah " + this.fullName() + ".");
    System.out.println("Saya berusia " + this.age + " tahun.");
    System.out.println("Tinggi Badan saya " + this.height + "m.");
    System.out.println("Berat Badan saya " + this.weight + "kg.");
    System.out.println("Nilai BMI saya " + Math.round(this.bmi()) + ".");
  }
  
  public double bmi() {
    return this.weight / this.height / this.height;
  }
  
  // Definisikan method `buy`, seharusnya menerima argument bertipe `Car`
  public void buy(Car car) {
    car.setOwner(this);
  }
  
  // Definisikan method `buy`, seharusnya menerima argument bertipe `Bicycle`
  public void buy(Bicycle bicycle) {
    bicycle.setOwner(this);
  }
}
