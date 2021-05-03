class Main {
  public static void main(String[] args) {
    // Berikan "dokter" sebagai nilai `job`
    Person person1 = new Person("Murni", "Aminah", 27, 1.6, 50.0, "dokter");
    person1.printData();
    // Berikan "guru" sebagai nilai `job`
    Person person2 = new Person("Yahya", "Nasrun", "Rizal", 65, 1.75, 80.0, "guru");
    person2.printData();
    System.out.println("----------------------");
    // Ubah `job` dari `person1` menjadi "dokter hewan"
    person1.setJob("dokter hewan");
    // Cetak "Telah merubah `job` dari `person1` menjadi ____."
    System.out.println("Telah merubah `job` dari `person1` menjadi " + person1.getJob() + ".");
    person1.printData();
  }
}
