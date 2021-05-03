import java.util.Scanner;

class Main {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    
    System.out.print("Nama Depan: ");
    // Masukkan nilai string
    String firstName = scanner.next();
    
    System.out.print("Nama Belakang: ");
    // Masukkan nilai string
    String lastName = scanner.next();
    
    System.out.print("Usia: ");
    // Masukkan nilai integer
    int age = scanner.nextInt();
    
    System.out.print("Tinggi (m): ");
    // Masukkan nilai desimal
    double height = scanner.nextDouble();
    
    System.out.print("Berat (kg): ");
    // Masukkan nilai desimal
    double weight = scanner.nextDouble();
    
    Person.printData(Person.fullName(firstName, lastName), age, height, weight);
  }
}


