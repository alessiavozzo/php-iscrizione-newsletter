<?php

//funzione che controlla se l'email è valida: accetta in ingresso l'email, controlla se ci sono . e @: se ci sono è true, sennò false

/**
 * Check if the given email contains @ and .
 * @param string $email given email
 * @return boolean
 */
function checkValidEmail($email)
{
    return str_contains($email, "@") && str_contains($email, ".");
};

//funzione che restituisce il messaggio dell'alert e il colore del bannerino: se dalla validazione email risulta true, allora il colore è verde e il messaggio è di email valida, sennò il colore è rosso e di email non valida

/**
 * Generates alert msg and alert banner-color
 * @param string $response boolean value
 * @return array
 */
function getAlertMsg($response)
{
    if ($response) {
        return [
            "class" => "alert-success",
            "message" => "Grazie! Iscrizione avvenuta con successo!"
        ];
    } else {
        return [
            "class" => "alert-danger",
            "message" => "L'email inserita non è valida"
        ];
    };
};

//funzione per reindirizzare l'utente alla pagina a seconda che response sia true o false
//se l'utente mette un'email non valida, devo rimandarlo indietro
//se l'utente mette un'email valida, devo mandarlo su una pagina di ringraziamento

/**
 * Redirects user to correct page
 * @param string $response boolean 
 */
function redirectUser($response)
{
    if ($response) {
        header('Location: ./views/thankyou.php');
    };
};
