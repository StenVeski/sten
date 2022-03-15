#Sten veski
#IT21
#Harjutus 03

from tkinter import *


aken = Tk()
aken.title("Harjutus 03")
aken.resizable(0, 0)
aken.configure(background='black')


Label(aken, text="Nimi: Sten Veski", font="Tahoma 16 bold italic", foreground="red", background="black", pady=10, padx=30).pack()
Label(aken, text="Kursus: IT21", font="Tahoma 16 bold italic", foreground="red", background="black", pady=10, padx=30).pack()
Label(aken, text="Aasta: 2022", font="Tahoma 16 bold italic", foreground="red", background="black", pady=10, padx=30).pack()

aken.mainloop()