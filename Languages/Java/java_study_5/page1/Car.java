class Car {
  private String name;
  private String color;
  private int distance = 0;
  private int fuel = 100;
  
  Car(String name, String color) {
    this.name = name;
    this.color = color;
  }
  
  public void printData() {
    System.out.println("Nama: " + this.name);
    System.out.println("Warna: " + this.color);
    System.out.println("Jarak: " + this.distance + "km");
    System.out.println("Bahan Bakar: " + this.fuel + "L");
  }
  
  public void run(int distance) {
    System.out.println("Bergerak " + distance + "km ...");
    if (distance <= this.fuel) {
      this.distance += distance;
      this.fuel -= distance;
    } else {
      System.out.println("Bahan bakar tidak mencukupi");
    }
    System.out.println("Jarak: " + this.distance + "km");
    System.out.println("Bahan Bakar: " + this.fuel + "L");
  }
  
  public void charge(int litre) {
    System.out.println("Menambahkan " + litre + "L ...");
    if (litre <= 0) {
      System.out.println("Tidak ada bahan bakar tertambahkan");
    } else if (litre + this.fuel >= 100) {
      System.out.println("Sekarang tangki penuh");
      this.fuel = 100;
    } else {
      this.fuel += litre;
    }
    System.out.println("Fuel: " + this.fuel + "L");
  }
}