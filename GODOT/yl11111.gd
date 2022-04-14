extends Node 

var nimi = "tont"
var elud = 10

func _ready():
	
	print(nimi)
	print(elud)
	print("Nimepikkus: " ,len(nimi))
	var elud1 = abs(2+elud)
	print("Mängijale lisati 2 elu, nüüd on ",elud1)
	var rng = RandomNumberGenerator.new()
	rng.randomize()
	print(rng.randi_range(8, 12))
	

