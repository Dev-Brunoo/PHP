<?php 

    // AULA DE PHP - DEBUG


    //  a ideia desses excercicio é basicamente praticar tanto o try e catch e o throw, entao decide criar esse excercicio para praticar o que eu aprendi hoje. 



    function verificarMaioridade($idade)
    {
        if ($idade < 18 ){
             throw new Exception ("Acesso negado: usuario menor de idade.");
        } else {
         echo "Compra autorizada!<br>"; 
        }

    }

    // A funcao acima ela analisa se a idade do user é menor que 18, caso seja menor, ela joga a informacao do throw "Acesso negado: usuario menor de idade.". caso contrario ela entra no else e autoriza o acesso do user. 

    try {
        echo "includo tetantiva de compra 1... <br>";
        verificarMaioridade(16);
        echo "Linha após a funcao (Nao vai rodar se der throw)<br>";
        
    } catch (Exception $e){
        echo "Catch pegou" . $e->getMessage() . "<br>";
    }

    
    try {
        echo "includo tetantiva de compra 2... <br>";
        verificarMaioridade(25);
        echo "Linha após a funcao (Nao vai rodar se der throw)<br>";
        
    } catch (Exception $e){
        echo "Catch pegou" . $e->getMessage() . "<br>";
    }