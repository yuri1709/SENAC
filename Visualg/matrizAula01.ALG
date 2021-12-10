Algoritmo "semnome"
var
mata:vetor[1..2,1..2]de inteiro
matb:vetor[1..2,1..2]de inteiro
i,j:inteiro
inicio
para i de 1 ate 2 faca  //criar a linha
   para j de 1 ate 2 faca //criar a colina
      escreva ("Digite a matriz:")
      leia (mata[i,j])
   fimpara
fimpara
para i de 1 ate 2 faca
   para j de 1 ate 2 faca
       matb[i,j]<-i+j
   fimpara
   escreval
fimpara
para i de 1 ate 2 faca
   para j de 1 ate 2 faca
      escreva (mata[i,j])
   fimpara
   escreval
fimpara
para i de 1 ate 2 faca
   para j de 1 ate 2 faca
      escreva (matb[i,j])
   fimpara
   escreval
fimpara
Fimalgoritmo