// Sten Veski Harjutus 7

import java.util.Scanner;
public class harjutus07 {
    public static void main(String[] args) {
        vale();
    }
    public static void vale() {

        Scanner scanner = new Scanner (System.in);

    try {
        System.out.println("Sisesta esimene arv: ");
        int num1 = scanner.nextInt();
        System.out.println("Sisesta teine arv: ");
        int num2 = scanner.nextInt();
        int a = num1/num2;
        System.out.println(a);
    }    
    catch (Exception e) {
        System.out.println("Vale");
    }
    System.out.println("Programm jätkub");
    vale();

    }
}