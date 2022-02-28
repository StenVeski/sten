#Sten Veski
#IT21
#Ülesanne 10

import re

fh = open('lambi.txt')
for line in fh:
     if re.search("^(([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])\.){3}([0-9]|[1-9][0-9]|1[0-9]{2}|2[0-4][0-9]|25[0-5])$", line):
         print(line,end= '')
    
kh = open('lambi.txt')
for line in kh:
     if re.search("^.*(?=.{8,})(?=.*\d)(?=.*[a-z]).*$", line):
         print(line,end= '')
    
    
    
    
    
    
  