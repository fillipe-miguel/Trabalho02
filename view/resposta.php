<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <title>Resposta</title>
    <?php
    include "../model/cliente-class.php";
    ?>
</head>

<body>
    <div class="card mt-4" style="width: 60%; margin: auto; text-align:center;">
        <div class="card-body">
            <h2 class="card-title">Confirmar reserva</h2>
            <p class="card-text">Nome completo: <?php echo $_GET["nome"] ?></p>
            <p class="card-text">RG: <?php echo $_GET["rg"] ?></p>
            <p class="card-text">Telefone: <?php echo $_GET["telefone"] ?></p>
            <p class="card-text">Email: <?php echo $_GET["email"] ?></p>
            <p class="card-text">Dias de acomodação: <?php echo $_GET["dias"] ?></p>

            <div class="card" style="width: 18rem;margin:auto;">
                <div class="card-header">
                    Acomodação escolhida:
                </div>
                <ul class="list-group list-group-flush">
                    <?php
                    switch ($_GET["acomodacao"]) {
                        case 1:
                            echo '<li class="list-group-item active">Suíte Single - R$100,00 a diária</li>
                                <li class="list-group-item">Suíte Master - R$150,00 a diária</li>
                                <li class="list-group-item">Suíte Família - R$180,00 a diária</li>';
                            break;

                        case 2:
                            echo '<li class="list-group-item">Suíte Single - R$100,00 a diária</li>
                                <li class="list-group-item active">Suíte Master - R$150,00 a diária</li>
                                <li class="list-group-item">Suíte Família - R$180,00 a diária</li>';
                            break;

                        case 3:
                            echo '<li class="list-group-item">Suíte Single - R$100,00 a diária</li>
                                <li class="list-group-item">Suíte Master - R$150,00 a diária</li>
                                <li class="list-group-item active">Suíte Família - R$180,00 a diária</li>';
                            break;

                        default:
                            echo "Erro ao selecioar opção de acomodação";
                            break;
                    }
                    ?>
                </ul>
            </div>

            <h2 class="card-title mt-3">Valor total da estadia: R$<?php echo $_GET["valor"] ?></h2>
            <a href="reserva-confirmada.php"><button class="btn btn-primary">Cofirmar</button></a>
            <a href="../index.html"><button class="btn btn-warning">Cancelar</button></a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>