class Car extends Vehicle {
  // Deklarasikan field instance `fuel`
  private int fuel = 50;
  
  // Definisikan getter untuk field instance `fuel`
  public int getFuel() {
    return this.fuel;
  }
  
  // Definisikan method instance `charge`
  public void charge(int litre) {
    System.out.println("Menambahkan " + litre + "L ...");
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
