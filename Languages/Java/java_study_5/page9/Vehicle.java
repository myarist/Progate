// Jadikanlah class Vehicle menjadi sebuah class abstrak
abstract class Vehicle {
  private String name;
  private String color;
  protected int distance = 0;

  Vehicle(String name, String color) {
    this.name = name;
    this.color = color;
  }

  public String getName() {
    return this.name;
  }
  public String getColor() {
    return this.color;
  }
  public int getDistance() {
    return this.distance;
  }
  public void setName(String name) {
    this.name = name;
  }
  public void setColor(String color) {
    this.color = color;
  }
  public void printData() {
    System.out.println("Nama: " + this.name);
    System.out.println("Warna: " + this.color);
    System.out.println("Jarak: " + this.distance + "km");
  }
  
  // Definisikan method abstrak `run`
  abstract public void run(int distance);
  
}