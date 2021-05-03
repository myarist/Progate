class Main {
  public static void main(String[] args) {
    // Tetapkan hasil method fullName ke variable name
    String name = fullName("Kate", "Jones");
    
    // Ganti argument pertama printData
    printData(name, 27);
    
    // Biarkan argument ini sebagaimana adanya
    printData("John Christopher Smith", 65);
    
  }

  public static void printData(String name, int age) {
    System.out.println("Nama saya adalah " + name + ".");
    System.out.println("Saya berusia " + age + " tahun.");
  }

  // Definisikan method fullName
  public static String fullName(String firstName, String lastName) {
    return firstName + " " + lastName;
  }
  
}
