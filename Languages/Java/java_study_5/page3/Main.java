class Main {
  public static void main(String[] args) {
    Car car = new Car();
    // Atur nama mobil menjadi "Ferrari" menggunakan method `setName`
    car.setName("Ferrari");
    
    // Atur warna dari mobil menjadi "Merah" menggunakan method `setColor`
    car.setColor("Merah");
    
    Bicycle bicycle = new Bicycle();
    // Atur nama dari sepeda menjadi "Bianchi" menggunakan method `setName`
    bicycle.setName("Bianchi");
    
    // Atur warna dari sepeda menjadi "Hijau" menggunakan method `setColor`
    bicycle.setColor("Hijau");
    
    System.out.println("【Info Mobil】");
    car.printData();
    
    System.out.println("=================");
    System.out.println("【Info Sepeda】");
    bicycle.printData();
  }
}
