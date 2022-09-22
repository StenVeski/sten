// Sten Veski IT21
package harjutused;
import java.util.Scanner;
	
	public class harjutus4 {
		public static void main(String[] args) {
			
				Scanner scanner = new Scanner(System.in);
				System.out.print("Kirjutage oma lause: ");
				String lause = scanner.nextLine();
				System.out.println(lause.toUpperCase());
				System.out.println("Tähti on kokku: " + lause.length());
				int wordCount = 1;

			for (int i = 0; i < lause.length(); i++) {
				if (lause.charAt(i) == ' ') 
				{
		         wordCount++;
				} 
			}

			System.out.println("Sõnu on kokku:  " + wordCount);
			String[] kiri;
			kiri = lause.split(" ");
			System.out.printf("Esimene sõna on: %s",kiri);
			}
		
		}
	