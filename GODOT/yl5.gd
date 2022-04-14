extends Node

func _ready():
		var tunnitasu = 1.5
		var tasu = 0
		var tootunnid = 40
		if tootunnid == 40:
			tasu = tunnitasu * tootunnid
			print(tasu)
		else:
			tasu = 40*tunnitasu+(tootunnid-40)*1.5*tootunnid
			print(tasu)
			
			

		var punktid = [7,28,64,51,81,40,21,73,34,98,39,17,33,85,35,44] 
		var keskmine = 0
		for i in punktid:
			keskmine += i
		keskmine = keskmine/len(punktid)
		print(punktid)
		print(keskmine)
		for i in punktid: 
			if i >= 90:
				print(i,"p - 5")
			elif i >= 75:
				print(i,"p - 4")
			elif i >= 50:
				print(i,"p - 3")
			elif i <= 50:
				print(i,"p - 2")	
