class Person {
  public static void printData(String name, int age, double height, double weight) {
    System.out.println("Nama saya adalah " + name + ".");
    System.out.println("Saya berusia " + age + " tahun.");
    System.out.println("Tinggi saya adalah " + height + " meter.");
    System.out.println("Berat saya adalah " + weight + " kilogram.");
    double bmi = bmi(height, weight);
    System.out.println("BMI saya adalah " + Math.round(bmi) + ".");

    if (isHealthy(bmi)) {
      System.out.println("BMI Anda berada dalam kisaran standar.");
    } else {
      System.out.println("BMI Anda berada di luar kisaran standar.");
    }
  }

  public static String fullName(String firstName, String lastName) {
    return firstName + " " + lastName;
  }

  public static String fullName(String firstName, String middleName, String lastName) {
    return firstName + " " + middleName + " " + lastName;
  }
  
  public static double bmi(double height, double weight) {
    return weight / height / height;
  }
  
  public static boolean isHealthy(double bmi) {
    return bmi >= 18.5 && bmi < 25.0;
  }
}
