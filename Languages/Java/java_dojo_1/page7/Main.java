import java.util.Scanner;

class Main {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    
    System.out.print("Nama depan: ");
    String firstName = scanner.next();
    
    System.out.print("Nama belakang: ");
    String lastName = scanner.next();
    
    System.out.print("Usia: ");
    int age = scanner.nextInt();
    
    System.out.print("Tinggi Badan(m): ");
    double height = scanner.nextDouble();
    
    System.out.print("Berat Badan(kg): ");
    double weight = scanner.nextDouble();
    
    Person.printData(firstName, lastName, age, height, weight);
  }
}
