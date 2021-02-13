<?php 
    session_start();

    require_once 'includes/functions.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindaugas PS0/2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/uzsakymas.css">
</head>
<body>
    <header>

        <?php
            require_once 'nav.php';
        ?>

        <div class="forma text-center">
            <form method="post" action="includes/uzsakymas.inc.php">
                <h1>Pateikti užsakymą</h1>

                    <div class="my-4">
                        <input class="input-field" type="text" placeholder="Projekto pavadinimas" name="pavadinimas" required>
                    </div>
                    <div class="my-4">
                        <input class="input-field" type="text" placeholder="Suma" name="suma" required>
                    </div>
                    <div class="my-4">
                        <input class="input-field" type="text" placeholder="Data" name="data" required>
                    </div>

                <button class="btn" name="pateikti">Pateikti užsakymą</button>
            </form>
        </div>

    </header>
    
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>