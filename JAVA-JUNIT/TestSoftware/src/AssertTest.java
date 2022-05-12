import static org.junit.Assert.*;

import org.junit.Before;
import org.junit.jupiter.api.Test;

public class AssertTest {

	@Before
	//cria variável caracter vazio
	public static boolean vazio(final CharSequence cs) {
		return cs == null || cs.length() == 0;
	}
	
	@Before
	public static boolean embranco(final CharSequence cs) {
		int strLen;
		if (cs == null || (strLen = cs.length()) == 0 ) {
			return true;
		}	
	
		for (int i = 0; i < strLen; i++) {
			if (!Character.isWhitespace(cs.charAt(i))) {
				return false;
			}
		}
		return true;
	}

	@Test
	public void test() {
		String obj1 = "junit";
		String obj2 = "junit";
		String obj3 = "test";
		String obj4 = "test";
		String obj5 = null;
		
		int var1 = 1;
		int var2 = 2;
		
		boolean aux = 3 == 3;
		boolean b = 3 == 2;
		boolean igual = aux;
		boolean diferente = b;
		double result = var1+var2;
		
		int[] sequencia1 = { 1, 2, 3 };
		int[] sequencia2 = { 1, 2, 3 };
		
		assertEquals(obj1, obj2);
		assertEquals(3.0, result,0);
		assertSame(obj3, obj4);
		assertNull(obj5);
		assertTrue(igual); //<--
		assertFalse(diferente);
		assertArrayEquals(sequencia1, sequencia2);
	}

	
	@Test
	public void vazioTest() {
		assertTrue(vazio(null));
		assertTrue(vazio(""));
		assertFalse(vazio(" "));
		assertFalse(vazio("bob"));
		assertFalse(vazio(" bob "));
		
	}
	
	
	@Test
	public void emBrancoTest() {
		assertTrue(embranco(null));
		assertTrue(embranco(""));
		assertTrue(embranco(" "));
		assertFalse(embranco("bob"));
		assertFalse(embranco(" bob "));
	}
	
	
};

