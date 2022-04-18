extends Node

var score = 0
var score1 = 0 
var kasutaja = ""
var AI = ["Kivi","Paber","Käärid"]

func _ready():
	pass
	

func _on_kivi_pressed():
	kasutaja = "Kivi"
	var random = RandomNumberGenerator.new()
	random.randomize()
	var dmg = round(rand_range(0,2))
	if AI[dmg] == "Kivi":
		
	
	
	print("Kivi")
func _on_paber_pressed():
	print("Paber")
func _on_kaarid_pressed():
	print("Käärid")
func _on_uus_pressed():
	get_tree().reload_current_scene()
