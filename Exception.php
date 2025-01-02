<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
$loginRequest->username = " ";
$loginRequest->password = " ";

try {
    validationLoginRequest($loginRequest);
    echo "VALID" . "\n";
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . "\n";

    var_dump($exception->getTrace());

    echo $exception->getTraceAsString() . "\n";
} finally {
    echo " ERROR ATAU ENGGAK, AKAN DIEKSEKUSI" . "\n";
}