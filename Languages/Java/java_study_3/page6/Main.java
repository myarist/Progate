class Main {
  public static void main(String[] args) {
    printData(fullName("Kate", "Jones"), 27);
    
    // Ganti argument printData agar cocok dengan parameter method fullName yang baru
    printData(fullName("John", "Christopher", "Smith"), 65);
  }

  public static void printData(String name, int age) {
    System.out.println("Nama saya adalah " + name + ".");
    System.out.println("Saya berusia " + age + " tahun.");
  }

  public static String fullName(String firstName, String lastName) {
    return firstName + " " + lastName;
  }
  
  // Definisikan method fullName
  public static String fullName(String firstName, String middleName, String lastName) {
    return firstName + " " + middleName + " " + lastName;
  }
  
}
