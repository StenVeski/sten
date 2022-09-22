package harjutused;

import java.util.Scanner;  
public class KT9 
{  
public static void main(String[] args)   
{  
int number, i;  
Scanner sc=new Scanner(System.in);  
System.out.print("Sisesta number: ");  
number = sc.nextInt();    
i=1;   
System.out.print("Arvud: ");  

while(i<=number)  
{  

System.out.print(i +"");    
i=i+1;  
}     
}  
}  