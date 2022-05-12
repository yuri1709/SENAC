/**
 * 
 */
package Programa;
import java.util.Arrays;
/**
 * @author yuri 
 *
 */
public class InicioAulas {

	public String[] ArrumarMochila() {
		
		String[] mochila = { "Livros", "Cadernos", "Lápis", "Estojo" };
		System.out.println("Minha Mochila possui: " +Arrays.toString(mochila));
		return mochila;
		
	}
	
	public String[] InserirCanetas() {
		
		String[] mochila = { "Livros", "Cadernos", "Lápis", "Estojo", "Canetas" };
				System.out.println("Minha Mochila possui: " +Arrays.toString(mochila));
		return mochila;
	}

}
