#Sten Veski
#IT21
#10.03.2022

from random import randint


count = 0
play = 1

while play ==1:
    mitu = int(input("Mitu korda soovite mängu mängida?: "))
    for i in range(mitu):
        x = randint(0,10)
        y = randint(0,10)

        print("Teie tehe on: ",x, "*", y)
        a = int(input("Vastus: "))
               
            
        if a == x*y:
            print("ÕIGE")
            count +=1
        else:
            print("VALE")
            print(f"Said {count} õiget vastust")
            
            
    play = int(input("1 = Mängi uuesti \n0 = Välju \n:"))
    if play == 1:
        print("Teie tehe on: ",x, "*", y)
        a = int(input("Vastus: "))
    else:
        print(f"Said {count} õiget vastust")
        print("Aitäh mängimast!")
        
