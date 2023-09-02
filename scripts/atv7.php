<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N° Maior</title>
    
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
            if(!empty($_POST['ativ07-n1'] && $_POST         ['ativ07-n2'] && $_POST['ativ07-n3'])){
                $n1 = $_POST['ativ07-n1'];
                $n2 = $_POST['ativ07-n2'];
                $n3 = $_POST['ativ07-n3'];

                if ($n1 > $n2 && ($n1 > $n3))
                {
                    echo "Número $n1 é maior que os números $n2 e $n3";
                }
                else if ($n2 > $n3 && ($n2 > $n3))
                {
                    echo "Número $n2 é maior que os números $n1 e $n3";
                }
                else if ($n3 > $n1 && ($n3 > $n2))
                {
                    echo "Número $n3 é maior que os números $n1 e $n2";
                }
                else 
                {
                    echo "Todos os valores são iguais.";
                }
            }else{
                echo "Digite os 3 Valores!";
            }
        ?>
    </div>

</body>
</html>

