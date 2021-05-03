import java.util.Scanner;

class Main {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    Car car = new Car("Ferrari", "Merah");
    Bicycle bicycle = new Bicycle("Bianchi", "Hijau");

    System.out.println("【Info Mobil】");
    car.printData();
    System.out.println("-----------------");
    System.out.print("Masukkan jumlah isi ulang bahan bakar: ");
    int litre = scanner.nextInt();
    car.charge(litre);
    
    System.out.println("=================");
    System.out.println("【Info Sepeda】");
    bicycle.printData();
  }
}
