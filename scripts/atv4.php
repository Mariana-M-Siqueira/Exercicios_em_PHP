<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
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
            if(!empty($_POST['ativ04-n1'])){
                $quant = $_POST['ativ04-n1'];

                if($_POST['produto'] === 'macas'){
                    if ($quant < 12){
                        $calc = (0.30 * $quant);
                        echo "Levando $quant Maçãs, você pagará R$$calc";
                    }
                    else if($quant >= 12){
                        $calc = (0.25 * $quant);
                        echo "Levando $quant Maçãs, você pagará R$$calc";
                    }
                }else{
                    echo "Escolha um produto!";
                }
            }else{
                echo "Digite um valor!";
            }

        ?>
    </div>

</body>
</html>