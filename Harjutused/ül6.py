#Sten Veski
#IT21
#ülesanne 06

ere = 0
kesk = 0
era = []
with open('s6pru_l6ustaraamatus.txt','r') as minu_fail:
    for rida in minu_fail:
        rida = rida.split(" ")
        print(f"{rida[0]:11} {rida[1]:11} {rida[2]:3} {rida[3]:4}")
        if rida [2] == "RE":
            ere +=1
        elif rida [2] == "KE":
            kesk +=1
        if rida [2] not in era:
            era.append(rida [2])
            
print("Reformikaid: ",ere)
print("Kesk: ",kesk)
print("Erakondi kokku: ",len(era))
           
       
            

        
        

        

        
        