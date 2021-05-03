class Main {
  public static void main(String[] args) {
    Person person1 = new Person();
    person1.hello();
    
    // Tetapkan field instance `name` dari `person1` dengan nilai "Murni Aminah"
    person1.name = "Murni Aminah";
    
    // Cetak field instance `name` dari instance `person1`
    System.out.println(person1.name);
    
    Person person2 = new Person();
    person2.hello();
    
    // Tetapkan field instance `name` dari `person2` dengan nilai "Yahya Nasrun Rizal"
    person2.name = "Yahya Nasrun Rizal";
    
    // Cetak field instance `name` dari instance `person2`
    System.out.println(person2.name);
    
  }
}
