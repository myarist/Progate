class Person {
  public String name;

  // Perbolehkan constructor untuk menerima sebuah argument bertipe String
  Person(String name) {
    System.out.println("Instance dari class Person telah terbentuk.");
    // Tetapkan field instance `name` menggunakan nilai dari argument
    this.name = name;
    
  }

  public void hello() {
    System.out.println("Halo, nama saya " + this.name + ".");
  }
}
