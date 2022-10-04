// Sten Veski Harjutus 6

import java.util.Scanner;
import java.io.PrintWriter;
import java.io.*;
import java.util.ArrayList;

public class harjutus06 {
    public static void main(String[] args) {
        ArrayList<Integer> list = new ArrayList<Integer>();
        Scanner scanner = new Scanner (System.in);
        int a = 1;

        while(a == 1) {
            System.out.println("Sisestage arv: ");
            String nr = scanner.nextLine();

        if(nr == " ") {
            break;
        }
            int number = Integer.parseInt(nr);
            list.add(number);
    
        }
        int kokku = list.size();
        int plus = list.stream().mapToInt(Integer::intValue).sum();
        int keskmine = plus/kokku;

    try {
            PrintWriter bw = new PrintWriter("nr.txt");
            bw.println("Arvud: "+ list);
            bw.println("Summa: "+ plus);
            bw.println("Keskmine: "+ keskmine);
            bw.close();
            System.out.println("File loodud! ");

		} catch (IOException e) {
			e.printStackTrace();
		}
	}
}