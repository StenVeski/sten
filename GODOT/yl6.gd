extends Node

var hp = 100
var skoor = 0 
var padrunid = 5
func _ready():
	$"bg2/game over".visible = false

func _process(delta):
	if Input.is_action_just_pressed("reload"):
		padrunid = 5
		print("Reloadisid salve ja nüüd sul on",padrunid)
	if padrunid > 0:
		
		if Input.is_action_just_pressed("tulista"):
			padrunid -= 1 
			print("Sul on",padrunid,"kuuli")
			
			var hit = bool(randi() % 2)
			if hit == true:
				print("Said pihta")
				var random = RandomNumberGenerator.new()
				random.randomize()
				var damage = random.randi_range(8,12)
				hp -= damage
				skoor += 1 
				print(hp)
			if hit == false:
				print("Lasid mööda")
	else:
		print("Kuulid otsas pead reloadima")
	if hp <= 0:
		print("Võitsid")
		$"bg2/game over".visible = true
		get_tree().paused = true
		
	
