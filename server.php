<?php

//ora è server.php a gestire il form quindi posso levare da index e portare tutto qui
session_start();
//var_dump($_SESSION);

//var_dump(__DIR__);
require_once __DIR__ . "/helpers/functions.php";

//var_dump($_POST);
//var_dump($_POST["email"]);

$email = $_POST["email"];

//controllo se $email è definita
//var_dump(isset($email));

//se $email è definita, allora devo controllare se l'email è valida
//se l'email è valida, deve restituirmi un msg, se non è valida deve restituirmene un altro 
if (isset($email)) {
    $response = checkValidEmail($email);
    $message = getAlertMsg($response);

    //index.php deve avere accesso a message: lo salvo nella super globale session
    $_SESSION["message"] = $message;

    //reindirizzo l'utente
    redirectUser($response);
};


//se l'utente mette un'email non valida, devo rimandarlo indietro
//se l'utente mette un'email valida, devo mandarlo su una pagina di ringraziamento