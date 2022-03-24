#Sten Veski IT 21
#Harjutus 04
#08.02.2022

#ruutude ja kuupide tabel
'''

print("   Arv | Ruut | Kuup")
for d in range(1,11):
    print(f" {d:6}|{d*d:6}|{d*d*d:6}")





#pank 

raha = 10000
intress = 0.05
aastad = 5
konto = 0

konto += raha
for i in range(aastad):
    kasum = intress*konto
    print(konto,kasum,konto+kasum)
    konto += kasum




#arvamismäng

import random


kord = 0
loop = 1
lambinr = random.randint(1, 11)
while loop == 1:
    if kord == 2:
        loop = 0
    tasku = int(input("Sisesta arv 1-10: "))
    kord +=1
    if tasku == lambinr:
        print("Tubli")
        loop = 0
    else:
        print("Ei arvand")
    






#viisikud



for i in range(1, 101):
    if i % 5 == 0:
        print(i)
    



#pisike korrutustabel


number = 5

for i in range(1, 11):
    print(number, 'x', i, '=', number*i)







#paaris ja paaritu

number = input("Sisesta number: ")
if int(number) % 2 == 0:
    print("{0} on paaris".format(number))
else:
    print("{0} on paaritu".format(number))






#loto


import random
lambinr = random.randint(10000,99999)
print(f"{lambinr}")







#tärnid3

for m in range(5,0,-1):
    for n in range(0,m):
        print('*', end='')
    print()



#tärnid1

for i in range(0,5):
    for j in range(0,5):
        print('* ', end='')
    print()







#tärnid2

for i in range(1,6):
        print("* "*i)
    
    

#jalgpall

sugu = input("Sisesta sugu: ")
if sugu == "mees":
    vanus = int(input("Sisesta vanus: "))
    if vanus >=16 and vanus <=18:
        print("Olete sobilik")





#ruut


a = int(input("Sisesta ruudu 1 külg: "))
b = int(input("Sisesta ruudu 2 külg: "))

if a == b:
    print("Tegemist on ruuduga.")
else:
    print("Tegemist on ristkülikuga.")
    
    
#matemaatika
    
arv1 = int(input("Sisesta arv 1: "))
arv2 = int(input("Sisesta arv 2: "))

tehe = input("Vali tehe:\n + liitmine \n - lahutamine \n * korrutamine \n / jagamine \n")

if tehe== "+":
    v = arv1 + arv2
elif tehe== "-":
    v = arv1 - arv2
elif tehe== "*":
    v = arv1 * arv2
elif tehe== "/":
    v = arv1 / arv2

else:
    vastus
print(f"{arv1}{tehe}{arv2}={v}")



#juubel

aasta = input("Sisesta sünniaeg dd.mm.yyyy: ")

d,m,y = aasta.split(".")

aasta1 = 2022
aasta2 = aasta1 - int(y)

if aasta2%5==0:
    print("Teil on juubel")
else:
    print("Teil ei ole juubel")
    
    
    

#müük
    

hind = int(input("Sisestage oma tootehind: "))

if hind <=10:
    soodukas = 0.1
else:
    soodukas = 0.2
    
lõpphind = hind-(hind*soodukas)

print("Hind on: ", lõpphind)
'''




















