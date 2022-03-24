#Sten Veski IT21
#Python töö 3
#02.03.2022

#kuupäev
'''
def kuu_nimi(a):
    kuud=["","jaan","veeb","mär","apr"]
    return kuud[a]
print(kuu_nimi(1))

def kuupaev_sonena(b):
    dd,mm,yyyy=b.split(".")
    print(dd,kuu_nimi(int(mm)),yyyy)
kuupaev_sonena("24.02.1918")
    

#Mündid

def pronksikarva_summa(a):
    
    fail = open(a, encoding="UTF-8")
    summa = 0
    for i in fail:
        if int (i)<6:
            summa+=int(i)
        return summa
print("Hoiupõrsasse läheb",pronksikarva_summa('mundid.txt'),"senti")
'''








#tervitused
'''
kulalised = int(input("Mitu külalist tuleb?"))
def tervitus(a):
    for i in range(a):
        print('Võõrustaja: "Tere!"')
        print(f"Täna no {i+1} kord tervitada, mõtiskleb võõrustaja")
        print('Külaline: "Tere, suur tänu kutse eest!"')
        
tervitus(kulalised)

#Peo eelarve

def eelarve(a):
    summa = a*10+55
    return summa
kutsutud = int(input("Mitu inimest on kutsutud?: "))
tuleb = int(input("Kindlasti on tulemas: "))
print("Maksimaalne eelarve:",eelarve(kutsutud),"eurot")
print("Minimaalne eelarve:",eelarve(tuleb),"€")


'''


#Õunamahl
'''
def mahlapakkide_arv(kogus):
    mahlapakkidearv = round(kogus*0.4/3,0)
    return mahlapakkidearv
kg = int(input("Sisesta õunte kogus: "))
print(int(mahlapakkide_arv(kg)))


'''
#Bänner
'''
kuva = int(input("Mitu korda soovid kuvada?: "))
def banner(t,k):
    for i in range(k):
        print(t.upper())

banner("Osta ja Sa ei kahetse!",kuva)

    
    



fail = open("nimekiri.txt",encoding="UTF-8")
jrk =  1
from datetime import *
kp = datetime.now().day
for i in fail:
    if jrk==kp:
        print(f"Tahvli ette tuleb: {i}")
    jrk +=1
'''
    








#jukebox
'''
lugu = 1 
fail1 = input("Sisestage failinimi koos laiendiga: ")
fail = open(fail1, encoding="UTF-8")
number = 1
for i in fail:
    print(str(number)+". "+str(i), end="")
    number +=1
 
fail = open(fail1, encoding="UTF-8")
soov = int(input("\nMis lugu tahad?:"))
for i in fail:
    if lugu == soov:
        print(f"Sinu lugu on: {i}")
    lugu+=1






#sissetulekud

fail = open("konto.txt", encoding="UTF-8")
for rida in fail:
    if float(rida) > 0:
        print(rida)
'''


#Jänesevanemate mure
'''
porgand = 0
ringid = int(input("Sisestage ringide arv: "))
for i in range(1,ringid+1):
    if i%2==0:
        porgand +=i
print(f"Saadavate porgandite koguarv on {porgand}")
'''



#ülikooli vastuvõetud

'''
fail = open("rebased.txt", encoding="UTF-8")
vastuvoetud = []
for rida in fail:
    vastuvoetud.append(int(rida))
aasta = input("Palun sisestage, millise aasta andmeid vajate:")
print(f"{aasta}. aastal oli vastuvõetud {vastuvoetud[int(aasta[3])-1]}")
'''