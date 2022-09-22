package harjutused;

import java.util.Scanner;  
public class KT17 
{  
public static void main(String[] args)   
{  
int number, i;  
Scanner sc=new Scanner(System.in);  
System.out.print("Sisesta number: ");  
number = sc.nextInt();    
i=2;   
System.out.print("Paarisrvud: ");  

while(i<=number)  
{  

System.out.print(i +" ");    
i=i+2;  
}     
}  
}  