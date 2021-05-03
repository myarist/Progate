class Main {
  public static void main(String[] args) {
    // Tambahkan argument untuk setiap usia orang
    printData("Kate Jones", 27);
    printData("John Christopher Smith", 65);
  }

  // Edit method agar menerima argument untuk usia
  public static void printData(String name, int age) {
    System.out.println("Nama saya adalah " + name + ".");
    // Cetak hasil sebagai "Saya berusia ____ tahun."
    System.out.println("Saya berusia " + age + " tahun.");
    
  }
}
