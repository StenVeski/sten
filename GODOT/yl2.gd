#Sten Veski
#IT21
# Harjutus 2

extends Node

var raha = 30
var kapsas = 2
var tomat = 37

func _ready():
	if raha < tomat:
		print("Sul pole piisavalt raha sa oled rott")
		var rott = abs(tomat-raha)
		print("Sul jääb puudu ",rott," eurot")
	else: 
		print("Sul on raha toote ostmiseks")
		
#ruut ja ristkülik

	var arv1 = 5
	var arv2 = 6
	var korrutamine = arv1 * arv2
	if arv1 == arv2:
		print("Ruudu pintala on ", korrutamine)
	else:
		print("Ristküliku pindala on ",korrutamine)





