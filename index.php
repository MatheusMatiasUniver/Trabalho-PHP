<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Currículos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!--    
        Matheus Maiante Marques de Almeida      R.A:227009-1
        Gabriel Cantarelli Araújo               R.A:229921-1
        João Antonio dos Santos Souza           R.A:226859-1
        Luan Virgílio Carreira Nascimento Alves R.A:228889-1
    -->
</head>

<body class="bg-light">
    <div class="container rounded border mt-5 pb-2 bg-white">
        <h1 class="text-center font-weight-bold mt-2">Currículo</h1>
        <form action="curriculo.php" method="$_POST" class="entrada" >
            <div class="form-group .d-flex mt-5">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control shadow p-3 mb-5 bg-white rounded" id="nome" name="nome">
            </div>
            <div class="form-group">
                <label for="sNome">Sobrenome:</label>
                <input type="text" class="form-control shadow p-3 mb-5 bg-white rounded" id="sNome" name="sNome">
            </div>
            <div class="form-group">
                <label for="idade">Idade:</label>
                <input type="number" class="form-control shadow p-3 mb-5 bg-white rounded" id="idade" name="idade">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control shadow p-3 mb-5 bg-white rounded" id="telefone" name="telefone">
            </div>
            <div class="form-group">
                <label for="email">E-Mail:</label>
                <input type="email" class="form-control shadow p-3 mb-5 bg-white rounded" id="email" name="email">
            </div>
            <button type="button" class="btn btn-secondary shadow addExperiencia">Adicionar Experiência</button>
            <div class="row">
                <button type="submit" class="btn btn-primary offset-md-5 shadow">Gerar Currículo</button>
            </div>
        </form>
    </div>
    <script src="js/script.js"></script>
</body>

</html>