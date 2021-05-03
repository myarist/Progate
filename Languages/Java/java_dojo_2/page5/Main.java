class Main {
  public static void main(String[] args) {
    Bicycle bicycle = new Bicycle("Bianchi", "Hijau");
    System.out.println("【Info Sepeda】");
    bicycle.printData();
    System.out.println("-----------------");
    bicycle.run(10);
  }
}