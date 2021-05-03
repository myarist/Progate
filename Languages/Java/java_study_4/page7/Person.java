class Person {
  public String name;

  // Definisikan `constructor` untuk class `Person`
  Person() {
    System.out.println("Sebuah instance dari class Person telah terbentuk.");
  }

  public void hello() {
    System.out.println("Halo, nama saya " + this.name + ".");
  }
}
