class Main {
  public static void main(String[] args) {
    Person person1 = new Person("Murni", "Aminah", 27, 1.6, 50.0);
    person1.printData();
    
    // Berikan "Nasrun" sebagai `middleName`
    Person person2 = new Person("Yahya", "Nasrun", "Rizal", 65, 1.75, 80.0);
    person2.printData();
    
    Person.printCount();
  }
}
