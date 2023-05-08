from tkinter import *
import sqlite3
import ttkbootstrap as ttk
from ttkbootstrap.tableview import Tableview
from ttkbootstrap.constants import *

root = ttk.Window()
root.geometry("1000x900") 
root.configure(bg="#1c1c1c")


#andmebaasi ühendamine 
conn = sqlite3.connect('epood_sveski.db')
cursor = conn.cursor()
cursor.execute('SELECT * FROM veski')
rows = cursor.fetchall()

# columns
columns = [
    {"text": "id", "stretch": False},
    {"text": "eesnimi", "stretch": True},
    {"text": "perenimi", "stretch": True},
    {"text": "email", "stretch": True},
    {"text": "car_make", "stretch": True},
    {"text": "car_model", "stretch": True},
    {"text": "car_year", "stretch": True},
    {"text": "car_price", "stretch": True},
]

# tabel
tableview = Tableview(
    master=root,
    paginated=True,
    coldata=columns,
    rowdata=rows,
    searchable=True,
    bootstyle=DANGER,
    pagesize=10,
    height=10,
)

tableview.grid(row=0, column=0, padx=10, pady=5)
tableview.autofit_columns()
form_frame = ttk.Frame(root, padding=10, relief='raised', style='Dark.TFrame')
form_frame.grid(row=1, column=0, padx=10, pady=10)

fields = ['eesnimi', 'perenimi', 'email', 'Mark', 'Mudel', 'Aasta', 'Hind']
entries = {}

for i, field in enumerate(fields):
    label = ttk.Label(form_frame, text=field.capitalize() + ':', style='Dark.TLabel')
    label.grid(row=i, column=0, sticky='w', pady=5)
    entry = ttk.Entry(form_frame, width=90, style='Primary.TEntry')
    entry.grid(row=i, column=1, padx=5, pady=5)
    entries[field] = entry

#andmed andmebaasi
def add_data():
    values = tuple(entry.get() for entry in entries.values())
    cursor.execute('INSERT INTO veski VALUES (NULL,?,?,?,?,?,?,?)', values)
    conn.commit()
    tableview.delete_all()
    cursor.execute('SELECT * FROM veski')
    rows = cursor.fetchall()
    tableview.insert_rows(rows)

#submit 
submit_button = ttk.Button(form_frame, text='Add row', command=add_data, style='Primary.TButton')
submit_button.grid(row=len(fields), column=1, pady=10)
root.mainloop()
