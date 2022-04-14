extends Node

func _ready():
	var ahvid = ["Feake","Bradwell","Dreger","Bloggett","Lambole","Daish","Lippiett","Blackie","Stollenbeck","Houseago","Dugall","Sprowson","Kitley","Mcenamin","Allchin","Doghartie","Brierly","Pirrone","Fairnie","Seal","Scoffins","Galer","Matevosian","DeBlase","Cubbin","Izzett","Ebi","Clohisey","Prater","Probart","Samwaye","Concannon","MacLure","Eliet","Kundt","Reyes"]
	print("Nimesid on ",len(ahvid))
	print("Esimene nimi on ",(ahvid[0]))
	ahvid.sort()
	var smallest = ahvid.min()
	for i in ahvid:
		print(i)
	ahvid.erase("Reyes")
	ahvid.append("Sten")
	var pikk = ahvid.max()
	print(pikk)
	print(ahvid)
	
	var player = {"gold":5, "health":100}
	for i in range(5):
		player.gold += 5
		print("Mängjial on ",player.gold," kulda")
