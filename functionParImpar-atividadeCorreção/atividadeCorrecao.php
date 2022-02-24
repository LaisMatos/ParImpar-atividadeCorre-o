<?php
/*

######################## RESOLUÇÃO 1 #########################
//</print_r> teste de código 
$resultado=numeroPar(2,3);
echo('<pre>');
print_r($resultado);
echo('</pre>');


//função para separa números pares
function numeroPar($numeroInicial,$numeroFinal){
    
    //recebendo argumentos da função
    $valorInicial=(int)$numeroInicial;
    $valorfinal=(int)$numeroFinal;

    //declaração de array
    $pares =array();
    $contadorPar=(int)0;
    while ($valorInicial<=$valorfinal) {
       
        //validar se o número for par
        if ($valorInicial%2==0) {
        
            //bloco de execução
            $pares[$contadorPar] = $valorInicial;
            $contadorPar++;
        }

        $valorInicial++;
    }
    //saída de dado
    return $pares;

}

######################## RESOLUÇÃO 1 #########################
$resultado=numeroImpar(2,3);
echo('<pre>');
print_r($resultado);
echo('</pre>');

//função para separa números pares
function numeroImpar($numeroInicial,$numeroFinal){
    
    //recebendo argumentos da função
    $valorInicial=(int)$numeroInicial;
    $valorfinal=(int)$numeroFinal;

    //declaração de array
    $impar =array();
    $contadorImpar=(int)0;
    while ($valorInicial<=$valorfinal) {
       
        //validar se o número for par
        if ($valorInicial%2==1) {
        
            //bloco de execução
            $impar[$contadorImpar] = $valorInicial;
            $contadorImpar++;
        }

        $valorInicial++;
    }
    //saída de dado
    return $impar;

}*/


######################## RESOLUÇÃO 2 #########################
/*$resultado=numParImpar(1,15);
echo('<pre>');
print_r($resultado);
echo('</pre>');


//função com os dois procedimentos
function numParImpar ($numeroInicial,$numeroFinal){
     
    //recebendo argumentos da função
     $valorInicial=(int)$numeroInicial;
     $valorfinal=(int)$numeroFinal;

     //declaração de array
     $par=array();
     $impar=array();

    //declaração de contadores (índices)
    $contadorPar=(int)0;
    $contadorImpar=(int)0;

    while ($valorInicial<=$valorfinal) {
       if ($valorInicial%2==0) {
        $pares[$contadorPar] = $valorInicial;
        $contadorPar++;
       }else {
        $impar[$contadorImpar] = $valorInicial;
        $contadorImpar++;
       }
       $valorInicial++;
    }

    //saída dos arrays usando chave-valor
    $parImpar =array(
        "listaPares" => $pares,
        "listaImpar" => $impar,
    );
    return $parImpar;
}*/

######################## RESOLUÇÃO 3 #########################
$resultado=numParImpar(1,15);
echo('<pre>');
print_r($resultado);
echo('</pre>');


//função para separa números pares
function numeroPar($numeroInicial,$numeroFinal){
    
    //recebendo argumentos da função
    $valorInicial=(int)$numeroInicial;
    $valorfinal=(int)$numeroFinal;

    //declaração de array
    $pares =array();
    $contadorPar=(int)0;
    while ($valorInicial<=$valorfinal) {
       
        //validar se o número for par
        if ($valorInicial%2==0) {
        
            //bloco de execução
            $pares[$contadorPar] = $valorInicial;
            $contadorPar++;
        }

        $valorInicial++;
    }
    //saída de dado
    return $pares;

}

//função para separa números pares
function numeroImpar($numeroInicial,$numeroFinal){
    
    //recebendo argumentos da função
    $valorInicial=(int)$numeroInicial;
    $valorfinal=(int)$numeroFinal;

    //declaração de array
    $impar =array();
    $contadorImpar=(int)0;
    while ($valorInicial<=$valorfinal) {
       
        //validar se o número for par
        if ($valorInicial%2==1) {
        
            //bloco de execução
            $impar[$contadorImpar] = $valorInicial;
            $contadorImpar++;
        }

        $valorInicial++;
    }
    //saída de dado
    return $impar;
}

//função com os dois procedimentos
function numParImpar ($numeroInicial,$numeroFinal){
     
    //recebendo argumentos da função
     $valorInicial=(int)$numeroInicial;
     $valorfinal=(int)$numeroFinal;

     //declaração de array
     $par=array();
     $impar=array();

    $pares= numeroPar($numeroInicial,$numeroFinal);
    $impar = numeroImpar($numeroInicial,$numeroFinal);
        
    //saída dos arrays usando chave-valor
    $parImpar =array(
        "listaPares" => $pares,
        "listaImpar" => $impar,
    );
    return $parImpar;
}



?>

