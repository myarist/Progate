class Main {
  public static void main(String[] args) {
    Person person1 = new Person("Murni", "Aminah", 27, 1.6, 50.0);
    Person person2 = new Person("Yahya", "Nasrun", "Rizal", 65, 1.75, 80.0);

    Car car = new Car("Ferrari", "Merah");
    // Atur `owner` dari `car` menjadi `person1` menggunakan method instance `setOwner` 
    car.setOwner(person1);
    
    Bicycle bicycle = new Bicycle("Bianchi", "Hijau");
    // Atur `owner` dari `bicycle` menjadi `person2` menggunakan method instance `setOwner` 
    bicycle.setOwner(person2);

    System.out.println("【Info Mobil】");
    car.printData();
    System.out.println("-----------------");
    System.out.println("【Info Pemilik Mobil】");
    // Dapatkan `owner` dari `car` menggunakan method instance `getOwner`,
    // dan gunakan `printData` untuk mencetak informasi pemilik
    car.getOwner().printData();

    System.out.println("=================");
    System.out.println("【Info Sepeda】");
    bicycle.printData();
    System.out.println("-----------------");
    System.out.println("【Info Pemilik Sepeda】");
    // Dapatkan `owner` dari `bicycle` menggunakan method instance `getOwner`,
    // dan gunakan `printData` untuk mencetak informasi pemilik
    bicycle.getOwner().printData();
  }
}
