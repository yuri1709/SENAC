/**
 * 
 */

/**
 * @author 36127512021.2
 * This class write Hello World
 */
public class HelloWorld {

	
	public static int somar(int a, int b) {
		return a+b;
	}
	
	public static int subtrair(int a, int b) {
		return a-b;
	}
	
	public static int multiplicar(int a, int b) {
		return a*b;
	}
	

	public static void main(String[] args) {
		//Escreve na tela Hello World.
		System.out.println("Hello World :)!!!");
		System.out.println();
		
		//testa saída da soma.
		if (somar(1,2) == 3) 
			System.out.println("Teste Aprovado");
		 else 
			System.err.println("Teste Reprovado");
	}
		
}
