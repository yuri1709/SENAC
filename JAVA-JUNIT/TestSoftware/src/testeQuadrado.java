import static org.junit.Assert.*;

import org.junit.Test;

public class testeQuadrado {

	@Test
	public void test() {
		UnitTesting obj1 = new UnitTesting(); //instanciando o UnitTesting
		//Saída do quadrado
		int output_q = obj1.quadrado(2);
		
		//testa a saída
		assertEquals(5, output_q); //testa se o parametro do primeiro bloco correspende ao que ele está recebendo
	}

}
