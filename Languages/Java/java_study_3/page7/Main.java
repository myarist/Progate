class Main {
  public static void main(String[] args) {
    printData(fullName("Kate", "Jones"), 27, 1.6, 50.0);
    printData(fullName("John", "Christopher", "Smith"), 65, 1.75, 80.0);
  }

  public static void printData(String name, int age, double height, double weight) {
    System.out.println("Nama saya adalah " + name + ".");
    System.out.println("Saya berusia " + age + " tahun.");
    System.out.println("Tinggi saya adalah " + height + " meter.");
    System.out.println("Berat saya adalahs " + weight + " kilogram.");
    
    // Tetapkan BMI ke variable bmi menggunakan method bmi
    double bmi = bmi(height, weight);
    
    // Menggunakan varibale bmi, cetak "BMI saya adalah ____."
    System.out.println("BMI saya adalah " + bmi + ".");
    
  }

  public static String fullName(String firstName, String lastName) {
    return firstName + " " + lastName;
  }
  
  public static String fullName(String firstName, String middleName, String lastName) {
    return firstName + " " + middleName + " " + lastName;
  }
  
  // Definisikan method bmi
  public static double bmi(double height, double weight) {
    return weight / height / height;
  }
  
}
