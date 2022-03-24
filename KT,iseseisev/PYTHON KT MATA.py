#Sten Veski
#IT21
#10.03.2022

from random import randint

mitu = int(input("Mitu korda soovite mängu mängida?: "))
play = 1
count = 1
while play == 1:
    x = randint(0,10)
    y = randint(0,10)
    
    print("Teie tehe on: ",x, "*", y)
    a = int(input("Vastus: "))
    
    if a == x*y:
        print("ÕIGE")
    else:
        print("VALE. Proovi uuesti:",)
        count +=1
    
        play = int(input("1 = Mängi uuesti \n0 = Välju \n:"))
        if play == 0:
            print("Aitäh mängimast!")
   
        