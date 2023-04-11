<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="mostrafooter.css">
</head>
<body>
<div class="conteudo">
   
   <div class="name">
       <p>Nome:</p>
       <?php echo $_POST['name'];
       ?>
     
   </div>
  </div>
  <div class="cpf">
  <p>CPF:</p>
  <?php echo $_POST['cpf'];
       ?>
      

  </div>
  <div class="niver">
   <p>Data de Nascimento:<p>
       <?php echo $_POST['niver'];
       ?>
       
  </div>
  <div class="numero">
   <p>Nº:<p>
       <?php echo $_POST['numero'];
       ?>
       
  </div>
  <div class="cidade">
   <p>Cidade:<p>
       <?php echo $_POST['cidade'];
       ?>
  </div>

  <div class="rua">
   <p>Rua:<p>
       <?php echo $_POST['rua'];
       ?>
  </div>
  <div class="etnia">
   <p>Etnia:<p>
       <?php echo $_POST['etnia'];
       ?>
       
  </div>

          
       </div>
       <form action="alterardados.php" method="post">
           <input type="hidden" name="nome" value=  <?php echo $_POST['name']
       ?> >
        <button type="submit" class="btn" id="submit">Alterar Dados</button>
       
</body>
</html>
<?php
include_once("footer.php");
?>
