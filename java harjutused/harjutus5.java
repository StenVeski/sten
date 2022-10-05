// Sten Veski Harjutus 5

import java.util.Scanner;

public class harjutus05 {
	    public static void main(String[] args) {

            jaga(0);
        }

        public static void jaga(int i) {
            int loop = 0;

            while(loop>3); {
                Scanner scanner= new Scanner (System.in);
                System.out.println("Esimene arv: ");
                int num1 = scanner.nextInt();
                System.out.println("Teine arv: ");
                int num2 = scanner.nextInt();

            if (num1 >= 0 && num2 > 0) {
                    double tehe = num1 / num2;
                    System.out.println("Vastus= "+tehe);
                    loop++;
                    }
        else {
            System.out.println("Vale vastus");
        }
        }
    }
}
