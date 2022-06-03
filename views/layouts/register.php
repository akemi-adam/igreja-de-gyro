<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <h1>
        Formulário de registro
    </h1>
    <p>
        <strong>
            Observação: 
        </strong>
        Coloque um nome sem espaços :)
    </p>
    <hr>
    <br>
    <form action="/savemember" method="post">
        <label for="name">
            Nome
        </label>
        <input type="text" name="name" required>
        <label for="cpf">
            CPF
        </label>
        <input type="text" name="cpf" required>
        <label for="district">
            Bairro
        </label>
        <input type="text" name="district" required>
        <label for="street">
            Rua
        </label>
        <input type="text" name="street" required>
        <label for="houseNumber">
            Número da casa
        </label>
        <input type="number" name="houseNumber" required>
        <button>
            Cadastrar
        </button>
    </form>
</body>
</html>