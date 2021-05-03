class Bicycle extends Vehicle {
  Bicycle(String name, String color) {
    super(name, color);
  }

  public void run(int distance) {
    System.out.println("Bergerak " + distance + "km ...");
    this.distance += distance;
    System.out.println("Jarak: " + this.distance + "km");
  }
}
