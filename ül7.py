#Sten Veski
#IT21
#Ülesanne 07


#ruumala

import math 

lambinr = input("Sisestage 1 nr: ")
lambinr2 = input("Sisestage 2 nr: ")

kujund = int(input("Vali kujund: \n 1 Kuup \n 2 Kera \n 3 Koonus \n 4 Silinder"))
            if kujund == 1:
                v = a*a*a
                return v
            elif kujund == 2:
                v = (4*math.pi*a**3)/3
                return v
            elif kujund == 3:
                v = (1/3*math.pi*r**2*h,2)
                return v
            elif kujund == 4:
                v = (math.pi*r**2*h,2)
                return v
            

                

#tervitus

'''
nimi = input("Sisestage oma nimi: ")
keel = input("Sisestage keel et,en,de: ")

def tsau(n,keel="de"):
    if keel == "et":
        print("Tsau,",nimi)
    elif keel == "en":
        print("Hello,",nimi)
    elif keel == "de":
        print("Einen schönen Tag noch,",nimi)
tsau(nimi,keel)
'''













    
    