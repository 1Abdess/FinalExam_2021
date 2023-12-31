<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registrazione</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <section class="register-photo" style="background: rgb(255,255,255);">
        <div class="form-container">
            <form method="post" action="registrati-fine.php">
                <h2 class="text-center"><strong>Crea</strong> un Account.</h2>
                <center>
                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" required></div>
                <div class="mb-3"><input class="form-control" type="password" name="password" placeholder="Password" maxlength="12" required></div>
                <div class="mb-3"><input class="form-control" type="text" name="nome" placeholder="Nome" required></div>
                <div class="mb-3"><input class="form-control" type="text" name="cognome" placeholder="Cognome" required></div>
                <div class="mb-3">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required>Accetto i termini e le condizioni.</label></div>
                </div>
                <div class="mb-3"><button class="btn btn-primary d-block w-100" type="submit" style="background: rgb(0,0,0);">Registrati</button></div><a class="already" href="../SITO/login.php">Hai già un account? Fai il Login.</a>
                </center>
            </form>
        </div>
    </section>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>