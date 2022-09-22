package harjutused;
import java.util.Scanner;

public class KT13 
{
    public static void main(String[] args)
    {
        Scanner scanner = new Scanner(System.in);
        System.out.println("Sisestage täisarv: ");
        
        int rows = scanner.nextInt();
        
        System.out.println("Teie kolmnurk: ");

        for (int i = 1; i <= rows; i++)
        {
            for (int j = 1; j <= i; j++)
            {
                System.out.print(j+"*");
            }
            System.out.println();
        }
      scanner.close();
    }
}
