<html>
<head>
</head>

<body>

<?php

  $arquivo = fopen("contas.txt","a");

  fwrite($rquivo,"Olaaaaa");

  $arquivo = fopen("contas.txt","r");
  $conteudo = read($arquivo,100);

  echo $conteudo;

  fclose($arquivo);
>?
</body>

</html>
