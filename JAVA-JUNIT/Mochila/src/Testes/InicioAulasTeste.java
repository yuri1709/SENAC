/**
 * 
 */
package Testes;

import static org.junit.Assert.*;


import org.junit.Test;

import Programa.InicioAulas;

/**
 * @author 36127512021.2
 *
 */
public class InicioAulasTeste {
	
	InicioAulas escola = new InicioAulas();
	String[] bolsa1 = { "Livros", "Cadernos", "Lápis", "Estojo" };
	String[] bolsa2 =  { "Livros", "Cadernos", "Lápis", "Estojo", "Canetas" };
	
	
	@Test
	public void testPrepareMinhaBolsa() {
		System.out.println("Inside testPreapreMinhaBolsa()");
		assertArrayEquals(bolsa1, escola.ArrumarMochila());
	}
	
	@Test
	public void testInseriCanetas() {
		System.out.println("Inside testInseriCanetas()");
		assertArrayEquals(bolsa2, escola.InserirCanetas());
	}

}
