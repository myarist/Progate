import java.util.Scanner;



class Main {
  public static void main(String[] args) {
    
    Scanner scanner = new Scanner(System.in);
    
    System.out.print("Nama depan: ");
    String firstName = scanner.next();
    System.out.println("Nama saya adalah " + firstName + ".");
    
    System.out.print("Nama belakang: ");
    String lastName = scanner.next();
    System.out.println("Nama saya adalah " + firstName + " " + lastName + ".");
    
  }
}
