class Car extends Vehicle {
  private int fuel = 50;

  Car(String name, String color) {
    super(name, color);
  }

  public int getFuel() {
    return this.fuel;
  }

  public void printData() {
    super.printData();
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
    System.out.println("Menambah " + litre + "L ...");
    if (litre <= 0) {
      System.out.println("Tidak ada bahan bakar tertambahkan");
    } else if (litre + this.fuel >= 100) {
      System.out.println("Tangki sekarang penuh");
      this.fuel = 100;
    } else {
      this.fuel += litre;
    }
    System.out.println("Bahan Bakar: " + this.fuel + "L");
  }
}
