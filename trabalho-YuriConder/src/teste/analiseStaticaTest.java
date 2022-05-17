package teste;

import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;

import calculadora.analiseStatica;


class analiseStaticaTest {

	analiseStatica cal = new analiseStatica();
	
	
	
	//testando os possíveis resultados
	@Test
	void testresultados() {
		assertEquals(cal.somar(1, 2), 3);
		assertEquals(cal.subtrair(1, 1), 0);
		assertEquals(cal.multiplicar(2, 5), 10);
		assertEquals(cal.divInt(10, 2), 5);
		assertEquals(cal.divDouble(10, 2), 5);
	}

}
