#Sten Veski
#IT21
#Ülesanne 09


#kuupäev

import datetime
from datetime import timedelta
import locale
locale.setlocale(locale.LC_ALL, 'et')

kuupäev = datetime.datetime.now()

print(kuupäev.strftime("%d.%B.%y"))


#isikukood

isikk = "50410214235"

aasta = int(isikk[1]+isikk[2])+2000
kuu = int(isikk[3]+isikk[4])
päev = int(isikk[5]+isikk[6])
print(aasta,kuu,päev)






