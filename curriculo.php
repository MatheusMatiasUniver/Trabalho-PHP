<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Currículo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        @media print {
            .no-print {
                display: none;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        error_reporting(E_ALL & ~E_WARNING);
        $nome = $_POST["nome"];
        $sNome = $_POST["sNome"];
        $idade = $_POST["idade"];
        $experiencias = $_POST["experiencia"];
        $telefone = $_POST["telefone"];
        $email = $_POST["email"];
        ?>
        <h1 class="text-center font-weight-bold mt-3">Currículo</h1>
        <p class="lead">Nome: <?php echo $nome . " " . $sNome; ?></p>
        <p class="lead">Idade: <?php echo $idade; ?></p>
        <p class="lead">Telefone: <?php echo $telefone; ?></p>
        <p class="lead">E-Mail: <?php echo $email; ?></p>
        <?php
        if ($experiencias == null) {
            echo "<p class='lead'>Experiência: Nenhuma</p>";
        } else {
            foreach ($experiencias as $experiencia) {
                echo "<p class='lead'>Experiência: " . $experiencia . "</p>";
            }
        }
        ?>
        <button onclick="window.print()" class="btn btn-primary no-print">Imprimir</button>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>