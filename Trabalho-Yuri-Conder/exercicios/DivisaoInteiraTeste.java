

package exercicios;
import static org.junit.Assert.assertEquals;

import org.junit.Test;

/**
 * @author Yuri.Conder
 *
 */
public class DivisaoInteiraTeste {
	//Criando um objeto da classe calculadora
	calculadora obj1 = new calculadora();
	
	@Test
	public void test1() {
		//Entrada de dados para fazer a divisão
		int output_q = obj1.divInt(10, 5);
		//Verificando se o resultado da divisão é o esperado.
		assertEquals(2, output_q);
	}
	
	@Test
	public void test2() {
		int output_q = obj1.divInt(12, 2);
		assertEquals(6, output_q);			
	}
	
	//este teste será pra mostrar um resultando não esperado
	@Test
	public void teste3() {
		int output_q = obj1.divInt(2,12);
		assertEquals(6, output_q);
	}

}