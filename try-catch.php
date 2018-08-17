<?php

function trataNome($name){

    if(!$name){

        throw new Exception("Nenhum nome foi encontrado", 400);    

    }

    echo ucfirst($name)."<br>";

}

try{

    trataNome("heytor");
    trataNome("");

} catch(Exception $e){

    // return json_encode(array(
    //     "message"   => $e->getMessage(),
    //     "line"      => $e->getLine(),
    //     "file"      => $e->getFile(),
    //     "code"      => $e->getCode()
    // ));

    echo $e->getMessage();

} finally{

    echo "<br>Executou o bloco Try!";

}

?>