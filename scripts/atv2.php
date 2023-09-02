<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    
    <style>
        body{
            margin: 0;
            padding: 0;
            background: linear-gradient(to right, #42275a, #734b6d);
        }
        #php{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: rgb(248, 244, 238);
            width: 28%;
            margin: 18% 36%;
            margin-bottom: 0;
            border-radius: 2rem;
            padding: 50px 0;
            font-size: 22px;
            text-align: center; 
        }
    </style>

</head>
<body>
    <div id="php">
        <?php
            if(!empty($_POST['ativ02-n1'])){
                $ano = $_POST['ativ02-n1'];

                if (($ano <=2007 && $ano >=2006) || $ano <1959)
                {
                echo "Votar ou não é escolha sua.";
                }
                else if ($ano >= 2008)
                {
                    echo "Você ainda não pode votar.";
                }
                else if ($ano <= 2005)
                {
                    echo "Seu voto é obrigatório.";
                }
            }else{
                echo "Digite um valor!";
            }
        ?>
    </div>

</body>
</html>