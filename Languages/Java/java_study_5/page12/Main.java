class Main {
  public static void main(String[] args) {
    Person person1 = new Person("Murni", "Aminah", 27, 1.6, 50.0);
    Person person2 = new Person("Yahya", "Nasrun", "Rizal", 65, 1.75, 80.0);

    Car car = new Car("Ferrari", "Merah");
    Bicycle bicycle = new Bicycle("Bianchi", "Hijau");
    
    person1.buy(car);
    
    person2.buy(bicycle);

    System.out.println("【Info Mobil】");
    car.printData();
    System.out.println("-----------------");
    System.out.println("【Info Pemilik Mobil】");
    car.getOwner().printData();

    System.out.println("=================");
    System.out.println("【Info Sepeda】");
    bicycle.printData();
    System.out.println("-----------------");
    System.out.println("【Info Pemilik Sepeda】");
    bicycle.getOwner().printData();
  }
}
