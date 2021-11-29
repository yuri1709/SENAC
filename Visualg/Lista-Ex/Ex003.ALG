Algoritmo "Contador de 0 ate 100"
// Disciplina  :  [Linguagem e Lógica de Programação] 
// Professor   : Antonio Carlos Nicolodi 
// Descrição   : Aqui você descreve o que o programa faz! (função)
// Autor(a)    : Nome do(a) aluno(a)
// Data atual  : 19/11/2021
Var
   num:inteiro
   contador:inteiro


Inicio
//Entrada
   Escreva ("Insira uma número entre 10 e 100: ")
   Leia (num)
//processo
   Se (num < 10 ) ou (num >100) entao
      Escreva ("Os valores são inválidos")
   Senao
      Para contador de 0 ate num faca
         EscrevaL (contador)
         contador <- contador + 1
      FimPara
   FimSe


Fimalgoritmo