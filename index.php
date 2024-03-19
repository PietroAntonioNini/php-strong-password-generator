<!DOCTYPE html>
<html lang="it" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

    <div class="container mt-5 text-center">

        <h1 class="mt-5 mb-5">Generatore di Password Sicure</h1>
        
        <form class="d-flex flex-column align-items-center" method="GET" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label class="mb-3" for="lenght">Lunghezza della Password:</label>
            <input class="mb-3" type="number" id="lenght" name="lenght" min="8" max="64" required>
            <button class="btn btn-outline-light" type="submit">Genera Password</button>
        </form>
    </div>

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

    ?>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>