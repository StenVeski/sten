#Sten Veski IT21
#Iseseisevtöö
#02.03.2022


#Vanused


import random

vanused = []

for i in range(5):
    vanused.append(random.randint(10,100))
print("Vanused: ",vanused)
print("Kõige noorem: ",min(vanused))
print("Kõige vanem: ",max(vanused))
print("Keskmine: ",sum(vanused)/len(vanused))
print("Kõik vanused kokku: ",sum(vanused))
