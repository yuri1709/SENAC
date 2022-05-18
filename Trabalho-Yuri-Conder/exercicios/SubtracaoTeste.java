/**
 * 
 */
package exercicios;
import static org.junit.Assert.assertEquals;

import org.junit.Test;

/**
 * @author Yuri.Conder
 *
 */
public class SubtracaoTeste {
	//Criando um objeto da classe calculadora
	calculadora obj1 = new calculadora();
	
	@Test
	public void test1() {
		//Entrada de dados para fazer a subtração
		int output_q = obj1.subtrair(10, 1);
		//Verificando se o resultado da subtração é o esperado.
		assertEquals(9,output_q);
	}
	
	@Test
	public void test2() {
		int output_q = obj1.subtrair(10,4);
		assertEquals(6,output_q);			
	}
	
	//este teste será pra mostrar um resultando não esperado
	@Test
	public void teste3() {
		int output_q = obj1.subtrair(4, 10);
		assertEquals(6,output_q);
	}

}