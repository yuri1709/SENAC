Algoritmo "calculoTabuada"
// Disciplina  :  [Linguagem e Lógica de Programação] 
// Professor   : Thyago
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Yuri Conder
// Data atual  : 19/11/2021
Var
num,multi:inteiro
contador:inteiro


Inicio
   EscrevaL ("TABUADA de 0 á 10")
   EscrevaL ("=================")
   Escreva  ("Insira o número a ser multiplicado:")
   Leia (num)
   EscrevaL ("")
   EscrevaL ("TABUADA DE ",num)

   Enquanto contador <= 10 faca
      multi <- num * contador
      EscrevaL (num," x",contador, " =",multi)
      contador <- contador + 1
   FimEnquanto



Fimalgoritmo