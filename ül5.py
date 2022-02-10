#Sten Veski
#IT21
#ülesanne 05



#nimede lisamine loendisse



nimed = []
for i in range(5):
   nimi = input("Sisestage 5 nime: ")
   nimed.append(nimi)
nimed.sort()
for i in range (len(nimed)):
    print(nimed[i])
    


    
