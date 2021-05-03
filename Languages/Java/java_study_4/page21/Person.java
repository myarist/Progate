class Person {
  private static int count = 0;
  private String firstName;
  private String middleName;
  private String lastName;
  private int age;
  private double height, weight;
  // Deklarasikan field instance `job`
  private String job;
  
  // Edit constructor-nya
  Person(String firstName, String lastName, int age, double height, double weight, String job) {
    Person.count++;
    this.firstName = firstName;
    this.lastName = lastName;
    this.age = age;
    this.height = height;
    this.weight = weight;
    this.job = job;
  }
  
  // Edit constructor-nya dan this()
  Person(String firstName, String middleName, String lastName, int age, double height, double weight, String job) {
    this(firstName, lastName, age, height, weight, job);
    this.middleName = middleName;
  }

  public String getMiddleName() {
    return this.middleName;
  }
  
  // Definisikan `getter` untuk field instance `job`
  public String getJob() {
    return this.job;
  }


  public void setMiddleName(String middleName) {
    this.middleName = middleName;
  }
  
  // Definisikan `setter` untuk field instance `job`
  public void setJob(String job) {
    this.job = job;
  }
  

  public String fullName() {
    if (this.middleName == null) {
      return this.firstName + " " + this.lastName;
    } else {
      return this.firstName + " " + this.middleName + " " + this.lastName;
    }
  }

  public void printData() {
    System.out.println("Nama saya " + this.fullName() + ".");
    System.out.println("Saya berusia " + this.age + " tahun.");
    System.out.println("Nilai BMI saya " + Math.round(this.bmi()) + ".");
    // Cetak "Saya adalah seorang ____."
    System.out.println("Saya adalah seorang " + this.job + ".");
    
  }

  public double bmi() {
    return this.weight / this.height / this.height;
  }

  public static void printCount() {
    System.out.println("Total: " + Person.count + " orang.");
  }
}
