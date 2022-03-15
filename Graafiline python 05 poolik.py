#Sten Veski
#IT21
#Harjutus 05

from tkinter import *

aken = Tk()
aken.title('Käibemaksukalkulaator')
aken.geometry("300x300")

silt = Label(aken, text="Hind käibemaksuta: ")
silt.grid(row=0,column=0)

summa = Entry(aken)
summa.grid(row=0,column=1)


def naita_valikut():
    print(var.get())

var = IntVar()
valikukast = Radiobutton(aken,text="9%", variable=var, value=0.09, command=naita_valikut)
valikukast.grid(row=1,column=1)
valikukast = Radiobutton(aken,text="20%", variable=var, value=0.2, command=naita_valikut)
valikukast.grid(row=2,column=1)



aken.mainloop()