algoritmo "YuriConder"
// Função :
// Autor :
// Data : 12/12/2021
// Seção de Declarações 
var
   matrizA:vetor[1..2,1..2] de inteiro
   l,c:inteiro
inicio
Para l de 1 ate 2 faca
   Para c de 1 ate 2 faca
      Escreva ("Valor da posição ",l,c," :")
      leia (matrizA[l,c])
   FimPara
FimPara

Para l de 1 ate 2 faca
      Escreva("[")
   Para c de 1 ate 2 faca
      Escreva(matrizA[l,c])
   FimPara
   Escreval("]")
FimPara
fimalgoritmo
