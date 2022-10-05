// Sten Veski IT21 Harjutus 7 //

package harjutused;
import java.util.Scanner;
public class harjutus7 {
    public static void main(String[] args) {
        vale();
    }
    public static void vale() {

        Scanner scanner = new Scanner (System.in);

    try {
        System.out.println("Esimene arv: ");
        int nr1 = scanner.nextInt();
        System.out.println("Teine arv: ");
        int nr2 = scanner.nextInt();
        int a = nr1/nr2;
        System.out.println(a);
    }    
    catch (Exception e) {
        System.out.println("Vale!");
    }
    System.out.println("Programm jätkub");
    vale();

    }
}
