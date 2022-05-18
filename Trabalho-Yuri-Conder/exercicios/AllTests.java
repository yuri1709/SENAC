package exercicios;

import org.junit.runner.RunWith;
import org.junit.runners.Suite;
import org.junit.runners.Suite.SuiteClasses;


@RunWith(Suite.class)
// Reunindo todos os testes em uma única classe
@SuiteClasses({ AllTests.class, 
		DivisaoInteiraTeste.class,
		MultiplicacaoTeste.class,
		SomaTeste.class,
		SubtracaoTeste.class
})


public class AllTests {

}


