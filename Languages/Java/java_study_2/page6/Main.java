class Main {
  public static void main(String[] args) {
    int number = 12;
    
    // Buat control flow sesuai hasil number % 3
    switch (number % 3) {
      case 0:
        System.out.println("Dapat dibagi 3");
        break;
      case 1:
        System.out.println("Sisanya 1 ketika dibagi 3");
        break;
      case 2:
        System.out.println("Sisanya 2 ketika dibagi 3");
        break;
    }
  }
}