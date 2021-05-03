import java.util.Scanner;
class Main {
  public static void main(String[] args) {
    Scanner scanner = new Scanner(System.in);
    Bicycle bicycle = new Bicycle("Bianchi", "Hijau");
    System.out.println("【Info Sepeda】");
    bicycle.printData();
    System.out.println("-----------------");
    System.out.print("Masukkan jarak yang akan ditempuh: ");
    int bicycleDistance = scanner.nextInt();
    bicycle.run(bicycleDistance);
    
    System.out.println("=================");
    Car car = new Car("Ferrari", "Merah");
    System.out.println("【Info Mobil】");
    car.printData();
    System.out.println("-----------------");
    System.out.print("Masukkan jarak yang akan ditempuh: ");
    int carDistance = scanner.nextInt();
    car.run(carDistance);
    System.out.println("-----------------");
    System.out.print("Masukkan jumlah isi ulang: ");
    int litre = scanner.nextInt();
    car.charge(litre);
  }
}