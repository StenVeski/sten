import sqlite3 

def andmebaas():
    conn = sqlite3.connect ("epood_sveski.db")
    c = conn.cursor()
    first_name = input("Sisesta nimi: ")
    last_name = input("Sisesta perenimi: ")
    email = input("Sisesta email: ")
    car_make = input("Sisesta automark: ")
    car_model = input("Sisesta automudel: ")
    car_year = int(input("Sisesta auto aasta: "))
    car_price = float(input("Sisesta auto hind: "))

    c.execute('INSERT INTO veski (first_name, last_name, email, car_make, car_model, car_year, car_price) VALUES (?, ?, ?, ?, ?, ?, ?)', (first_name, last_name, email, car_make, car_model, car_year, car_price))
    conn.commit()
    
    conn.close()

def andmed():
    conn = sqlite3.connect('epood_sveski.db')
    c = conn.cursor()
    c.execute("SELECT * FROM veski")
    andmed1 = c.fetchall()
    for rida in andmed1:
        print(rida)
    conn.close()

def kustutamine():
    conn =sqlite3.connect('epood_sveski.db')
    inp = conn.cursor()
    k = input("Sisesta ID mille tahad kustutada: ")
    inp.execute("DELETE FROM veski WHERE id = ?", (k,))
    conn.commit()
    conn.close()

def keskmine_kallim():
    conn = sqlite3.connect('epood_sveski.db')
    c = conn.cursor()

    c.execute("SELECT AVG(car_year) FROM veski")
    avg_aasta = c.fetchone()[0]
    print("Keskmine autode aasta:", avg_aasta)

    c.execute("SELECT MAX(car_price) FROM veski")
    max_hind = c.fetchone()[0]
    print("Kõige kallim hind:", max_hind)

    conn.close()

def vanemad_autod():
    conn = sqlite3.connect('epood_sveski.db')
    c = conn.cursor()
    sql = "SELECT * FROM veski WHERE car_year < 2000 ORDER BY car_year ASC"
    c.execute(sql)
    results = c.fetchall()
    for row in results:
        print(row)
    conn.close()

def automark():
    conn = sqlite3.connect('epood_sveski.db')
    c = conn.cursor()
    sql = "SELECT car_make, car_model FROM veski ORDER BY car_year DESC LIMIT 5"
    c.execute(sql)
    results = c.fetchall()
    print("5 kõige uuemat automarki koos mudelitega: ")
    for row in results:
        print(row[0], row[1])
    conn.close()

def menu():
         while True:
                print("1. Andmete lisamine")
                print("2. Andmete kustutamine")
                print("3. Kuvatakse kõik andmed")
                print("4. Kuva ühe reaga keskmine autode aasta, kõige kallim hind")
                print("5. Kuva read, kus on vanemad autod, kui 2000 aasta, sorteeri aasta järgi tõusvas järjekorras")
                print("6. Kuva automaatselt 5 kõige uuemat automarki kood mudeliga")
                print("7. Kuva 5 kõige kallimat sinu valitud automarki, sorteeri perenime järgi")
                print("0. Välju")

                valik = input("Sisesta valik: ")
                if valik == '2':
                    kustutamine()
                elif valik == '3':
                    andmed()
                elif valik == '4':
                    keskmine_kallim()
                elif valik == '5':
                    vanemad_autod()
                elif valik == '6':
                    automark()
                elif valik == '0':
                    exit()
                else: 
                    print("Sisesta uuesti!")

if __name__ == '__main__':
            menu()







  