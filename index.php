<?php

    function f1()
    {
        echo ">f1 esta antes dea excucao"."</br>";
    }

    function f2($int)
    {
        if(!is_int($int))
            {
                throw new Exception("O argumento nao é do tipo esperado");
            }
            else {
                echo ">F2 esta na excecao"."</br>";
            }
            f3();
    }

    function f3()
    {
        echo ">F3 esta depois da excecao";
    }

    f1();
    f2(
        int: 5
    );


