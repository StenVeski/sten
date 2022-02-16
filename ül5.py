#Sten Veski
#IT21
#ülesanne 05


#tärnid

import random

tärnid = []

for i in range(6):
    tärnid.append(random.randint(11,21))
for n in range(len(tärnid)):
    print("*"*tärnid[n])
    





#vanused

import random

vanus = []

for i in range(10):
    vanus.append(random.randint(10,80))
print("Vanused: ",vanus)
print("Kõige noorem: ",min(vanus))
print("Kõige vanem: ",max(vanus))
print("Keskmine vanus: ",sum(vanus)/len(vanus))



#duplikaadid

opilased = ['Albert','Sten','Indrek','Indrek','Albert']

opilased = list(set(opilased))
for i in range(len(opilased)):
     print(i+1, opilased[i])
    
     





#nimede lisamine loendisse



nimed = []
for i in range(5):
   nimi = input("Sisestage 5 nime: ")
   nimed.append(nimi)
nimed.sort()
for i in range (len(nimed)):
    print(nimed[i])
    
  
#õpilased
    
opilased = ['Mark','Indrek','Sander','Roger','Peedu']
for i in range(len(opilased)):
    print(f"{i+1}. {opilased[i]}")
random = int(input("Sisesta number: "))

del opilased[random-1]

uus = input("Sisesta uus nimi: ")

opilased.insert(random-1, uus)
print("Uus loend: ")
print(opilased)

    
