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

    <!-- Lista todos os membros e suas principais informações, tal como todas as ofertas (dízimos) que eles já fizeram -->

    <?php 

        while ($member = $queries[0]->fetchArray()) {

            echo "<h3>" . $member['name'] ."</h3>";
            echo "<p>CPF: " . $member['cpf']  . "<br>Endereço: " . $member['district'] . ", " . $member['street'] . ", " . $member['houseNumber'] . "<br>Código do membro: " . $member['id_member'] ."</p>";
            echo "<p><strong>Dízimos pagos: </strong></p>";

            while ($offer = $queries[1]->fetchArray()) {
                if ($member['id_member'] === $offer['id_member']) {
                    echo "<ul><li>" . $offer['offer'] . "</li></ul>";
                }
            }

        }
    ?>
</body>
</html>