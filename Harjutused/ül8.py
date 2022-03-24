#Sten Veski
#IT21
#Ülesanne 08


#auto

class auto:
    automark = 0
    mudel = 0
    aasta = 0
    värv = 0
    makskiirus = 0
    hind = 0
    
    
    def lisaautomark(self,x):
        self.automark = x
        
    def lisamudel(self,x):
        self.mudel = x
        
    def lisaaasta(self,x):
        self.aasta = x
        
    def lisavärv(self,x):
        self.värv = x
        
    def lisamakskiirus(self,x):
        self.makskiirus = x
        
    def lisahind(self,x):
        self.hind = x 
        
    def kuva(self):
        print("Automark: {} \nMudel: {} \nAasta: {} \nVärv: {} \nMakskiirus: {} \nHind: {}".format(self.automark, self.mudel, self.aasta, self.värv, self.makskiirus, self.hind))
        
        
        
uusObjekt = auto()       
uusObjekt.lisaautomark("Volvo")
uusObjekt.lisamudel("S80")
uusObjekt.lisaaasta("2006")
uusObjekt.lisavärv("Must")
uusObjekt.lisamakskiirus("240kmh")
uusObjekt.lisahind("5000$")
uusObjekt.kuva()
        
        
        

    
    
    
    