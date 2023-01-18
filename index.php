<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de CPF</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1 class="text-center py-5">Validação de CPF</h1>

        <form action="" method="post" class="shadow pb-3">

            <div class="alert alert-success  text-center">
                CPF Valido
            </div>

            <div class="alert alert-danger text-center">
                CPF Invalido
            </div>

            <div class="d-grid gap-2 col-6 mx-auto py-3">
                <label for="cpf" class="form-label">Digite seu CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" placeholder="111.111.111-11">
            </div>

            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn btn-primary" type="submit">Verificar</button>
                <button class="btn btn-outline-primary" type="reset">Limpar</button>
            </div>
        </form>
    </div>
    <?php

    //Manipula string
    $test = $_POST["cpf"];
    $cpfTratado = preg_replace('/[^0-9]/', "", $test);
    echo $cpfTratado;
    echo "<br>";

    // Recorta digito verificador
    $digitoVerificador = substr($cpfTratado, 9, 10);
    echo $digitoVerificador;


    ?>
</body>

</html>