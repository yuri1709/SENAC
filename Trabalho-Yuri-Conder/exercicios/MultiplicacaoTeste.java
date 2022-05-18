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
public class MultiplicacaoTeste {
	//Criando um objeto da classe calculadora
	calculadora obj1 = new calculadora();
	
	@Test
	public void test1() {
		//Entrada de dados para fazer a multiplicação
		int output_q = obj1.multiplicar(7, 6);
		//Verificando se o resultado da multiplicação é o esperado.
		assertEquals(42, output_q);
	}
	
	@Test
	public void test2() {
		int output_q = obj1.multiplicar(9, 9);
		assertEquals(81, output_q);			
	}
	
	//este teste será pra mostrar um resultando não esperado
	@Test
	public void teste3() {
		int output_q = obj1.multiplicar(11, 11);
		assertEquals(111,output_q );
	}

}