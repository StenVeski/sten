extends Node

var elud = 100
var vaenlane = 100

func _ready():
	while vaenlane >= 0 or elud >= 0:
		randomize()
		var hit = round(rand_range(8,15))
		randomize()
		var hit2 = round(rand_range(7,18))
		randomize()
		print("P1 Hit: ", hit, "P2 Hit: ", vaenlane)
		print('P2 Hit: ',hit2,' P1 elud: ',elud)
		vaenlane -= hit
		elud -= hit2 
	print()
	if vaenlane > elud:
		print("Mängija 1 võitis!")
	else:
		print("Mängija 2 võitis!")
