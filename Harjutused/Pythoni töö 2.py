#Sten Veski
#Pythoni töö 2
#02.03.2022

#õunad
'''
import random

lumivalgeke = 14 
pöial = int(input("Mitu pöialpoissi tahavad õuna?: "))
for i in range(pöial):
    oun = random.randint(1,2)
    print(oun)
    lumivalgeke = lumivalgeke - oun
print("Lumivalgekesele jäi: ",lumivalgeke)
'''
        

#male
'''
arv = int(input("Sisestage täisarv: "))

nisuterad = 1

i = 1
while i <= arv:
    nisuterad *= 2
    i+=1
print(f"Nisuteri on {arv} ruudu eest: {nisuterad}")
'''

#täringud
'''
import random

taringud = int(input("Sisestage täringute arv: "))

for i in range(taringud):
    print(random.randint(1,6))
'''

#murelikud lapsevanemad
'''
ringid = int(input("Mitu ringi läbisid?: "))

porgandid = 0


ring = 1
while ring <= ringid:
    if i%2==0:
        porgandid+=1
    ring += 1
print(f"Porgandite koguarv on: {porgandid} ")
'''


        
#äratus
'''
aratus = int(input("Mitu korda peaks äratus helisema?: "))

for i in range(aratus):
    print("Tõuse ja sära!")
'''   
    

    
    