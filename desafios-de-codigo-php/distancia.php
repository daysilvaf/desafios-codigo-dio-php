DESAFIO
Duas motos (X e Y) partem em uma mesma direção. A moto X sai com velocidade constante de 60 Km/h e a moto Y sai com velocidade constante de 90 Km/h. 
Em uma hora (60 minutos) a moto Y consegue se distanciar 30 quilômetros da moto X, ou seja, consegue se afastar um quilômetro a cada 2 minutos.
O seu desafio é ler a distância (em Km) e calcular quanto tempo leva (em minutos) para a moto Y tomar essa distância da outra moto.

ENTRADA
O arquivo de entrada contém um número inteiro K que representa a quantidade de quilômetro que que a moto Y deve estar da moto X.

SAÍDA
Imprima o tempo necessário para a moto Y ficar com a quantidade K de quilômetro da moto X, seguido da mensagem " minutos".

-----------------------------------------
| EXEMPLO DE ENTRADA | EXEMPLO DE SAÍDA |
-----------------------------------------
|         30        |     60 minutos   |
|         110       |    220 minutos   |
-----------------------------------------

RESOLUÇÃO

<?php
  $distancia = fgets(STDIN);

  // Calcula o tempo necessário em minutos (distância vezes 2, pois a moto Y se afasta 1 km a cada 2 minutos).
  $tempo = $distancia * 2;
  
  // Imprime o resultado no formato "tempo minutos".
  echo "$tempo minutos";
?>
