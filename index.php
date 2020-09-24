<!DOCTYPE html>
<html lang=”pt-br”>
<head>
    <title>Calculo IMC</title>
</head>
<body>
    <form method="get">   
        <b>Calcular IMC da pessoa:</b><br> <br>   
        Altura (Use Pontuação: 1.99 Em METROS): <input name="altura" type="input" />   
        Peso (Em kg): <input name="peso" type="input" />   
        <input type="submit" value="Encontrar IMC" />
    </form>
    <p>  
    <?php
    //novo comentário só para testar commit na tarefa 7
        if(isset($_GET['altura']) && isset($_GET['peso'])) {        
            $altura = $_GET['altura'];        
            $peso = $_GET['peso'];

            $conta1 = $altura*$altura;
            $conta2 = $peso/$conta1;
        
            $resultado = number_format($conta2);
        
            if(isset($resultado) && $resultado != '0'){;    
                echo '<h1>Seu IMC é:</h1>';
                echo '<h2>'.$resultado.'</h2>';
            }else{
                echo '<h1>Por favor, utilize apenas numeros!</h1>'; 

            }
        }
    ?></p>
  </body>
  </html>