<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dízimo</title>
</head>
<body>
    <h1>
        Fazer oferta
    </h1>
    <form action="/saveoffer" method="post">
        <label for="salary">
            Salário
        </label>
        <input type="number" name="salary" min="10" required>

        <label for="members">
            Membro
        </label>
        <select name="members" id="members">
            <?php
                while ($membersNames = $query->fetchArray()) {
                    echo "<option value=" . $membersNames['name'] . ">" . $membersNames['name'] ."</option>";
                }
            ?>
        </select>
        <button>
            Enviar
        </button>
    </form>
</body>
</html>