class Main {
  public static void main(String[] args) {
    Person person1 = new Person("Murni", "Aminah", 27, 1.6, 50.0);

    System.out.println(person1.fullName());
    System.out.println(person1.age);
    System.out.println(person1.bmi());
  }
}
