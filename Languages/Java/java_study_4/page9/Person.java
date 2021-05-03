class Person {
  private static int count = 0;
  private String firstName;
  private String middleName;
  private String lastName;
  private int age;
  private double height;
  private double weight;

  Person(String firstName, String lastName, int age, double height, double weight) {
    count++;
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

  public String getMiddleName() {
    return this.middleName;
  }

  public void setMiddleName(String middleName) {
    this.middleName = middleName;
  }

  public void printData() {
    System.out.println("Nama saya " + this.fullName() + ".");
    System.out.println("Saya berusia " + this.age + " tahun.");
    System.out.println("Nilai BMI saya " + Math.round(this.bmi()) + ".");
  }

  public String fullName() {
    if (this.middleName == null) {
      return this.firstName + " " + this.lastName;
    } else {
      return this.firstName + " " + this.middleName + " " + this.lastName;
    }
  }

  public double bmi() {
    return this.weight / this.height / this.height;
  }

  public static void printCount() {
    System.out.println("Total: " + Person.count + " orang.");
  }
}
