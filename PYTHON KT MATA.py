#Sten Veski
#IT21
#10.03.2022

from random import randint

mitu = int(input("Mitu korda soovite mängu mängida?: "))
play = 1
count = 0
for i in range(mitu):
    x = randint(0,10)
    y = randint(0,10)
    
    tehe = print("Teie tehe on: ",x, "*", y)
    a = int(input("Vastus: "))
    
    if a == x*y:
        print("ÕIGE")
        count +=1
    else:
        print("VALE")
        print(f"Said {count} õiget vastust")
        
    
        play = int(input("1 = Mängi uuesti \n0 = Välju \n:"))
        if play == 0:
            print(f"Said {count} õiget vastust")
            print("Aitäh mängimast!")
        
