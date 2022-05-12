/**
 * @author Yuri
 * Exemplo de analise estatica
 */

import java.util.Scanner; // importa biblioteca que faz o java ler as informações do teclado

public class analiseStatica {

	
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
