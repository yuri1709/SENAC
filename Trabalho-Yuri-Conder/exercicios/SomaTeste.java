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
public class SomaTeste {
	//Criando um objeto da classe calculadora
	calculadora obj1 = new calculadora();
	
	@Test
	public void test1() {
		//Entrada de dados para fazer a soma
		int output_q = obj1.somar(1, 1);
		//Verificando se o resultado da soma é o esperado.
		assertEquals(2,output_q);
	}
	
	@Test
	public void test2() {
		int output_q = obj1.somar(2, 10);
		assertEquals(12,output_q);			
	}
	
	//este teste será pra mostrar um resultando não esperado
	@Test
	public void teste3() {
		int output_q = obj1.somar(4, 4);
		assertEquals(12,output_q);
	}

}

