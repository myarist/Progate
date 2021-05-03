// Import class Scanner dari java.util.Scanner
import java.util.Scanner;

class Main {
  public static void main (String[] args) {
    Scanner scanner = new Scanner(System.in);
    
    System.out.print("Nama: ");
    
    // Deklarasikan variable name dari tipe String untuk mengambil nilai input dari console
    String name = scanner.next();
    
    // Cetak "Hello, ____."
    System.out.println("Hello, " + name + ".");
  }
}