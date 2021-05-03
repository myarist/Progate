class Main {
  public static void main(String[] args) {
    Person person1 = new Person("Murni", "Aminah", 27, 1.6, 50.0);
    person1.printData();
    Person person2 = new Person("Yahya", "Nasrun", "Rizal", 65, 1.75, 80.0);
    person2.printData();
    
    System.out.println("----------------------");
    // Panggil method instance `getMiddleName` menggunakan instance `person2`
    // dan hasilkan output "Nama tengah dari person2 adalah ____."
    System.out.println("Nama tengah dari person2 adalah " + person2.getMiddleName() + ".");
  }
}
