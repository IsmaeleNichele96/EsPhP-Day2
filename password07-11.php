<?php

//! Richiesta: verificare che la password inserita dall'utente rispetti questi criteri:
//? 1 - almeno 8 caratteri
//? 2 - almeno 1 numero
//? 3 - almeno 1 maiuscola
//? 4 - almeno 1 carattere speciale



//? 1 - almeno 8 caratteri

function checkChar($password)
{
    if (strlen($password) >= 8) {
        return true;
    }
    echo "Non hai inserito almeno 8 caratteri \n";
    return false;
}

//? 2 - almeno 1 numero

function checkNum($password)
{
    for ($i = 0; $i <= strlen($password); $i++) {
        if (is_numeric($password[$i])) {
            return true;
        }
    }
    echo "Inserisci almeno un numero  \n";
    return false;
}

//? 3 - almeno 1 maiuscola

function checkUpper($password)
{
    for ($i = 0; $i < strlen($password); $i++) {
        if (ctype_upper($password[$i])) {
            return true;
        }
    }
    echo "Devi mettere almeno una lettera maiuscola  \n";
    return false;
}

//? 4 - almeno 1 carattere speciale

function checkSpecial($password)
{
    $special = ["!", "$", "£", "%", "&"];
    foreach ($special as $spec) {
        if (str_contains($password, $spec)) {
            return true;
        }
    }
    echo "Inserisci un carattere speciale \n";
    return false;
}

function checkPass()
{
    $password = readline('Inserisci la password: ');

    if (checkChar($password) && checkNum($password) && checkUpper($password) && checkSpecial($password)) {
        echo 'Password valida';
        return true;
    }
    echo "Password non valida \n";
    return false;
}

// $counter = 0;
// do {
//     $passValid = checkPass();
// } while ($passValid == false && $counter++ < 4);


//? Esercizio extra: Ripetere l’esercizio della media visto a lezione

function media(...$numeri)
{
    // $somma = 0;
    // foreach ($numeri as $numero) {
    //     $somma += $numero
    // }
    $somma = array_sum($numeri);
    echo "La media dei numeri è " . $somma / count($numeri);
}

media(1, 4, 7, 10, 32, 8);
