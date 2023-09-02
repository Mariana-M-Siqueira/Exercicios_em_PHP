<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordem Crescente</title>
    
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
            if(!empty($_POST['ativ05-n1'] && $_POST['ativ05-n2'] && $_POST['ativ05-n3'])){
                
                $n1 = $_POST['ativ05-n1'];
                $n2 = $_POST['ativ05-n2'];
                $n3 = $_POST['ativ05-n3'];
                $nums = array($n1, $n2, $n3);

                sort($nums);
                
                if(($n1 != $n2) && ($n2 != $n3) && ($n1 != $n3)){
                    echo "Ordem Crescente: ";
                    foreach($nums as $val){
                        echo $val." ";
                    }
                }else{
                    echo "Digite valores diferentes entre si!";
                }
            }else{
                echo "Digite os 3 valores!";
            }
        ?>
    </div>

</body>
</html>
