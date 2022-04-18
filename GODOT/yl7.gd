extends Node

func _ready():
	pass
	
func _process(delta):
	var padrunid1 = $"Node".padrunid
	$"Node/bg2/Ammo".text = str("Ammo: ",padrunid1)
	var hp1 = $"Node".hp
	$"Node/bg2/Hp".text = str("Hp: ",hp1)
	var skoor1 = $"Node".skoor
	$"Node/bg2/skoor".text = str("Score: ",skoor1)
	



