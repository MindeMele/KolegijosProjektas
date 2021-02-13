<?php 
    session_start();

    require_once 'includes/dbh.inc.php';

    $sql = "SELECT * FROM orders ;";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
    
    $uzsakymai = "var uzsakymai = [ ";    
    $length = 0;

    while($row = mysqli_fetch_assoc($result)) {
        $uzsakymai .=  "[' " . $row["vardas"] . " ',' " . $row["pavadinimas"]. " ',' " . $row["suma"]. " ',' " . $row["data"] . " '] ,  ";
        $length++;
    }

    $uzsakymai .= " ]; ";

    } else {
    echo "0 results";
    }

    mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mindaugas PS0/2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/pagrindinis.css">
</head>
<body>
    <header>

        <?php
            require_once 'nav.php';
        ?>

        <div class="tekstas text-center">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vardas</th>
                        <th scope="col">Projekto Pavadinimas</th>
                        <th scope="col">Suma</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody id="table-bd">
                    <tr><th scope="row">1</th><td>Mark</td><td>Otto</td><td>450</td><td>2002-12-05</td></tr>
                </tbody>
            </table>
        </div>
        <div class="trinti text-center">
            <form action="includes/d_uzs.inc.php" method="post">
                <input class="input-field" type="text" placeholder="ID" name="id" required>
                <button class="btn">Ištrinti</button>
            </form>
        </div>

    </header>

    <script>
        <?php
        echo $uzsakymai;
        echo "var length = ".$length;
        ?>

        var iner = "";

        for (var i = 0; i < length; i++) {
            iner += "<tr><th scope='row'>"+(i+1)+"</th><td>"+uzsakymai[i][0]+"</td><td>"+uzsakymai[i][1]+"</td><td>"+uzsakymai[i][2]+"</td><td>"+uzsakymai[i][3]+"</td></tr>";
        }

        document.getElementById('table-bd').innerHTML = iner;

    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
