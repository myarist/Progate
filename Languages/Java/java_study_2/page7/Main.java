class Main {
  public static void main(String[] args) {
    String grade = "G";
    
    // Menggunakan default, cetak "Nilai tidak valid" jika tidak ada case yang cocok
    switch (grade) {
      case "A":
        System.out.println("Sempurna");
        break;
      case "B":
      case "C":  
        System.out.println("Bagus");
        break;
      case "D":
        System.out.println("Anda lulus");
        break;
      case "F":
        System.out.println("Anda gagal");
        break;
      default:
        System.out.println("Nilai tidak valid");
        break;
    }
  }
}