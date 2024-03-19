<?php

    //funzione per generare una password casuale
    function generaPassword($lenght) {
        
        //caratteri disponibili per la password
        $caratteri = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+{}|[]\';:"<>?,./';

        //genero la password casuale
        $password = '';
        $caratteriLunghezza = strlen($caratteri);

        for ($i = 0; $i < $lenght; $i++) {
            $password .= $caratteri[rand(0, $caratteriLunghezza - 1)];
        }

        return $password;
    }

    //verifico se è stato inviato il parametro "lunghezza" nel GET
    if (isset($_GET['lenght'])) {

        //ottengo la lunghezza della password dal GET
        $lunghezzaPassword = $_GET['lenght'];

        //genero la password in base alla lunghezza
        $passwordGenerata = generaPassword($lunghezzaPassword);

        //stampo in pagina la password generata
        echo 
        "
        <p class='text-center mt-5 fs-4' >La tua password generata è:</p>
        <p class='text-center mt-3 fs-2'><strong>$passwordGenerata</strong></p>
        ";
    }