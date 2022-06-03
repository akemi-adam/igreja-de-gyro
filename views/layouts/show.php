<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membros</title>
</head>
<body>
    <h1>
        Lista de membros
    </h1>
    <hr>
    <?php 

        while ($member = $queries[0]->fetchArray()) {
            echo "<h3>" . $member['name'] ."</h3>";
            echo "<p>CPF: " . $member['cpf']  . "<br>Endereço: " . $member['district'] . ", " . $member['street'] . ", " . $member['houseNumber'] . "</p>";
            while ($offer = $queries[1]->fetchArray()) {
                if ($member['name'] === $offer['member']) {
                    echo "<ul><li>" . $offer['offer'] . "</li></ul>";
                }
            }
        }
    ?>
</body>
</html>