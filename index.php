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
        
        <form class="d-flex flex-column align-items-center" method="GET" action="result.php">
            <label class="mb-3" for="lenght">Lunghezza della Password:</label>
            <input class="mb-5" type="number" id="lenght" name="lenght" min="8" max="64" required>

            <div class="mb-3">
                <label for="useNumbers">Usa Numeri:</label>
                <input type="checkbox" id="useNumbers" name="useNumbers">
            </div>

            <div class="mb-3">
                <label for="useLetters">Usa Lettere:</label>
                <input type="checkbox" id="useLetters" name="useLetters">
            </div>

            <div class="mb-3">
                <label for="useSymbols">Usa Simboli:</label>
                <input type="checkbox" id="useSymbols" name="useSymbols">
            </div>

            <div class="mb-5">
                <label for="allowRepetition">Permetti Ripetizione:</label>
                <input type="checkbox" id="allowRepetition" name="allowRepetition">
            </div>

            <button class="btn btn-outline-light mt-2" type="submit">Genera Password</button>
        </form>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>