public class harjutus2 {
	//põhiprogamm
	public static void main(String[] args) {
		elips(13,8);
		
		int s = toll(4);
		
	}

	//tagastab täisarvulise väärtuse
	static int toll(int a){
		int meeter  = a * a;
		return meeter;
	}
	
	//alamprogramm argumendiga
	static void elips(int x, int y){
        double pi = x*y* Math.PI;
		System.out.println("Elipsi pindala on: "+pi);
	}
}
