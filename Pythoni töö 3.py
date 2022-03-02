#Sten Veski IT21
#Python töö 3
#02.03.2022

#jukebox

fail = input("Sisestage failinimi koos laiendiga: ")
fail = open(fail, encoding="UTF-8")
for i in fail:
    print(i)






#sissetulekud
'''
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