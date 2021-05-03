class Main {
  public static void main(String[] args) {
    System.out.println("=== loop while ===");
    int i = 1;
    while (i < 10) {
      // Keluar dari loop jika i dapat dibagi 5
      if (i % 5 == 0) {
        break;
      }
      
      System.out.println(i);
      i++;
    }
    
    System.out.println("=== loop for ===");
    for (int j = 1; j < 10; j++) {
      // Lewati loop jika j dapat dibagi 3
      if (j % 3 == 0) {
        continue;
      }
      
      System.out.println(j);
    }
  }
}