package calculadora;

import java.io.PrintStream;
import java.util.Scanner; // importa biblioteca que faz o java ler as informações do teclado

public class analiseStatica {
	
//Operações:
//criados os metodos de operações matemáticas para realizar os teste no junit	
	//method some
	public static int somar(int a, int b) {
		return a+b;		
	}
	
	//method subtrair
	public int  subtrair(int a, int b) {
		return a-b;
	}
	
	//method multiplicar
	public int  multiplicar(int a, int b) {
		return a*b;
	}
	
	//method divisaoInteira
	public int  divInt(int a, int b) {
		return a/b;
	}
	
	//method divisaoReal
	public double divDouble(double a, double b) {
		return a/b;	
	}
		
	
	
	public static void main(String[] args) {
		// 2.criando objeto scanner
		Scanner ler = new Scanner(System.in);
		int a,b;

		//3. lendo a primeira entrada do teclado
		System.out.printf("Informe o primeiro valor:");
		a = ler.nextInt();
		
		//3. lendo a primeira entrada do teclado
		System.out.printf("Informe o segundo valor:");
		b = ler.nextInt();
							
		System.out.println("\n Resultados \n");
		System.out.printf("%d + %d = %d\n", a, b, (a+b));
		System.out.printf("%d - %d = %d\n", a, b, (a-b));
		System.out.printf("%d * %d = %d\n", a, b, (a*b));
		System.out.printf("%d / %d = %d\n", a, b, (a/b));
		System.out.printf("%d / %d = %4.2f\n", a, b,((double)a/b));
					
	}

}
