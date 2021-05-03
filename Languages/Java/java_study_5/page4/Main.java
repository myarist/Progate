import java.util.Scanner;

class Main {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    Car car = new Car();
    car.setName("Ferrari");
    car.setColor("Merah");
    Bicycle bicycle = new Bicycle();
    bicycle.setName("Bianchi");
    bicycle.setColor("Hijau");
    
    System.out.println("【Info Mobil】");
    car.printData();
    // Output "Bahan Bakar: ____L" menggunakan method instance `getFuel`
    System.out.println("Bahan Bakar: " + car.getFuel() + "L");
    
    System.out.println("-----------------");
    System.out.print("Masukkan jumlah isi ulang bahan bakar: ");
    int litre = scanner.nextInt();
    // Memanggil method instance `charge` dan berikan `litre` sebagai argument
    car.charge(litre);
    
    System.out.println("=================");
    System.out.println("【Info Sepeda】");
    bicycle.printData();
  }
}
