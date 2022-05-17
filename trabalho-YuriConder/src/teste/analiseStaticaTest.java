//importando as depedências para fazer o teste
package teste;

import static org.junit.jupiter.api.Assertions.*;

import org.junit.jupiter.api.Test;

import calculadora.analiseStatica;

// class de teste
class analiseStaticaTest {

	analiseStatica cal = new analiseStatica(); // instnaciando a classe analiseStatica
	
	
	
	//testando os possíveis resultados das operações matemáticas
	@Test
	void testresultados() {
		assertEquals(cal.somar(1, 2), 3); // 1 +2 = 3
		assertEquals(cal.subtrair(1, 1), 0); // 1-1 = 0
		assertEquals(cal.multiplicar(2, 5), 10); // 2*5 = 10
		assertEquals(cal.divInt(10, 2), 5); // 10/5 = 2
		assertEquals(cal.divDouble(10, 2), 5); // 10/5 = 2.0
	}

}
