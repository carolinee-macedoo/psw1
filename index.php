<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemplo</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="main">
        <form action="mostraaluno.php" method="post">
            <div class="agrup">
                <div class="p1">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="dados">
                </div>
                <div class="p2">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" class="dados" placeholder="xxx.xxx.xxx-xx">
                </div>
            </div> 
            <div class="agrup">
                <div class="p1">
                    <label for="niver">Data de nascimento</label>
                    <input type="date" name="niver" class="dados">
                </div>
                <div class="p2">
                    <label for="cidade">Cidade </label>
                    <input type="text" name="cidade" class="dados">
                </div>
            </div> 
            <div class="agrup">
                <div class="p1">
                    <label for="rua">Rua</label>
                    <input type="text" name="rua" class="dados dadosMaior">
                </div>
                <div class="p2">
                    <label for="numero">Nº</label>
                    <input type="text" name="numero" class="dados dadosMenor">
                </div>
            </div> 
           
            <div class="agrup">
                <div class="p1">
                    <label for="name">Etnia</label>
                    <select name="etnia" class="dados">
                        <option value="Branco">Branco</option>
                        <option value="Preto">Preto</option>
                        <option value="Pardo">Pardo</option>
                        <option value="Indígena">Indígena</option>
                    </select>
                </div>
                <div class="p2" id="radios">
                    
                    <p class="InpR">Masculino
                        <input type="radio" name="mas" class="inputradio" >
                    </p>
                    <p class="InpR">Feminino
                        <input type="radio" name="fem" class="inputradio">
                    </p>
                </div>
            </div> 
            <div class="agrup">
                <div class="p1">
                    <label for="name">Estudou o Ensino fundamental em:</label>
                        <select name="etnia" class="dados">
                            <option value="pub">Escola Pública</option>
                            <option value="Par">Escola Particular</option>
                        </select>
                </div>
                <div class="p2">
                    <label for="cpf">Renda Familiar</label>
                    <input type="text" name="cpf" class="dados">
                </div>
            </div> 
            



        <div class="parasubmit">
            <button type="submit" id="submit">Enviar</button>
        </div>
        </form>
    </div>
</body>

</html>
<?php
include_once("footer.php");
?>