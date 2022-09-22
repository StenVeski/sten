package harjutused;
import java.util.Scanner;

public class KT21 {
	public static void main(String[] args) {

	Scanner scanner = new Scanner(System.in);
	System.out.print("Sisestage minutid: ");
	int minutes = scanner.nextInt();
	int hours = minutes/60;
	int minutes1 = minutes%60;
	System.out.print("Tunde on: " +hours+ " ja minuteid on: " + minutes1);

	}
}
	
	
