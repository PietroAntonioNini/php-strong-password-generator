<?php

    //funzione per generare una password casuale
    function generaPassword($lenght, $useNumbers, $useLetters, $useSymbols, $allowRepetition) {
        
        // Definisco i caratteri disponibili per la password
        $caratteri = '';

        // Aggiungo i caratteri in base alle opzioni selezionate dall'utente
        if ($useNumbers) {
            $caratteri .= '0123456789';
        }
        if ($useLetters) {
            $caratteri .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
        }
        if ($useSymbols) {
            $caratteri .= '!@#$%^&*()_+{}|[]\';:"<>?,./';
        }

        // Inizializzo un array che conterrà i caratteri disponibili
        $caratteriArray = str_split($caratteri);

        // Genero la password casuale
        $password = '';

        for ($i = 0; $i < $lenght; $i++) {

            // Se non permettiamo ripetizioni, estraiamo caratteri unici
            if (!$allowRepetition && count($caratteriArray) > 0) {
                $randomIndex = array_rand($caratteriArray);
                $password .= $caratteriArray[$randomIndex];

                // Rimuoviamo il carattere estratto per evitare ripetizioni
                unset($caratteriArray[$randomIndex]);

                // Resetto gli indici dell'array
                $caratteriArray = array_values($caratteriArray);
                
            } else {
                // Se permettiamo ripetizioni o non ci sono più caratteri disponibili, scegliamo casualmente dai caratteri rimanenti
                $password .= $caratteri[rand(0, strlen($caratteri) - 1)];
            }
        }

        return $password;
    }

    // Verifico se sono stati inviati i parametri nel GET
    if (isset($_GET['lenght'])) {

        // Ottengo la lunghezza della password dal GET
        $lunghezzaPassword = $_GET['lenght'];

        // Ottengo le opzioni selezionate dall'utente
        $useNumbers = isset($_GET['useNumbers']);
        $useLetters = isset($_GET['useLetters']);
        $useSymbols = isset($_GET['useSymbols']);
        $allowRepetition = isset($_GET['allowRepetition']);

        // Genero la password in base alle opzioni
        $passwordGenerata = generaPassword($lunghezzaPassword, $useNumbers, $useLetters, $useSymbols, $allowRepetition);

        // Stampo in pagina la password generata
        echo 
        "
        <p class='text-center mt-5 fs-4' >La tua password generata è:</p>
        <p class='text-center mt-3 fs-2'><strong>$passwordGenerata</strong></p>
        ";
    }