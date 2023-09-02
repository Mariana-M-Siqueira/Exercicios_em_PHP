<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipo do Triângulo</title>
    
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
            if(!empty($_POST['ativ08-n1'] && $_POST         ['ativ08-n2'] && $_POST['ativ08-n3'])){
                $n1 = $_POST['ativ08-n1'];
                $n2 = $_POST['ativ08-n2'];
                $n3 = $_POST['ativ08-n3'];

                if ($n1 != $n2 && ($n1 != $n3) && ($n2 != $n3))
                {
                    echo "É um Triângulo Escaleno, pois possui todos os lados diferentes!";
                }
                else if($n1 == $n3 && ($n1 == $n2) && ($n2 == $n3))
                {
                    echo "É um Triângulo Equilátero, pois possui todos os lados iguais!";
                }
                else if ($n1 == $n3 || ($n1 == $n2) || ($n2 == $n3))
                {
                    echo "É um Triângulo Isósceles, pois possui dois lados iguais!";
                }
            }else{
                echo "Digite os 3 Valores!";
            }
        ?>
    </div>

</body>
</html>

