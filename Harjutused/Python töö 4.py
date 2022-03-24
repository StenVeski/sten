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
'''
    
    



