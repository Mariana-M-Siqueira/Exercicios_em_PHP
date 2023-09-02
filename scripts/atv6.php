<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peso Ideal</title>
    
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
            if(!empty($_POST['ativ06-n1'] && $_POST['ativ06-n2'])){
                $sexo = $_POST['ativ06-n1'];
                $altura = $_POST['ativ06-n2'];

                if ($sexo == 1){
                    $ideal = (62.1 * $altura) - 44.7;
                    echo "Seu peso ideal é de $ideal Kg.";
                }else if ($sexo == 2){
                    $ideal = (72.7 * $altura) - 58;
                    echo "Seu peso ideal é de $ideal Kg.";
                }else{
                    echo "Esta opção não existe, por favor retorne a página e digite uma das opções disponíveis.";
                }
            }else{
                echo "Digite os 2 valores!";
            }
        ?>
    </div>

</body>
</html>

