class Main {
  public static void main(String[] args) {
    Person person1 = new Person("Murni", "Aminah", 27, 1.6, 50.0);
    person1.printData();
    
    Person person2 = new Person("Yahya", "Rizal", 65, 1.75, 80.0);
    person2.printData();
    
    // Panggil method class `printCount`
    Person.printCount();
  }
}
