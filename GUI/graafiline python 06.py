#Sten Veski
#IT21
#Harjutus 06


from tkinter import*

#akna seaded
aken = Tk()
aken.title('Denmark')

#lõuendi loomine
louend = Canvas(aken, width=500, height=500, background='#FF0000')
louend.pack()

#pildi lisamine
taani = PhotoImage(file='tolgus2.png')
louend.create_image(0, 260, anchor=NW, image=taani)

#kujundite loomine
#louend.create_rectangle(500, 500, 0, 0, fill='#EC1717')
louend.create_rectangle(200, 0, 220, 260, fill='#FFFFFF', outline='#FFFFFF')
louend.create_rectangle(0, 100, 500, 120, fill='#FFFFFF', outline='#FFFFFF')

#teksti loomine
louend.create_text(150,75, text="Denmark", fill="Black", font=("Tahoma", 15))
aken.mainloop()


aken.mainloop()



