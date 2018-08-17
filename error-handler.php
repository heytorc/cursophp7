<?php

function errorHandler($code, $message, $file, $line){

    echo json_encode(array(
        "message"   => $message,
        "line"      => $line,
        "file"      => $file,
        "code"      => $code
    ));

}

set_error_handler("errorHandler");

include "teste.php";

?>