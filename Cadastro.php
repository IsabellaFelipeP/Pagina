<!DOCTYPE HTML>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" type="text/css" href="Marcador.css">
    <!--bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!--jquer - link cdn -->
    <script src ="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <title> Cadastro do Cliente</title>

    <!--jquer - link cdn -->
</head>

<body>
<form>
    <div class="container">
        <div class="page-header text-center form-group">
            <h1>Cadastrar Cliente</h1>
        </div>

        <div class="col-md-12">
            <form>
                <!--Nome!-->
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" id="nome" placeholder="Nome" autofocus>
                </div>
                <!--CPF-->
                <div class="form-group">
                    <label for="cpf">CPF:</label>
                    <input type="text" class="form-control" id="cpf" placeholder="000.000.000-00">
                </div>
                <!--Endereço-->
                <div class="form-group">
                    <label for="endereco">Endereço:</label>
                    <input type="text" class="form-control" id="endereco" placeholder="Endereço">
                </div>

                <!--Radio, se fosse usar o checkbox era só colocar "checkbox" no lugar do "radio"-->
                <div class="radio" >
                    <label>
                        <input type="radio" name="opcao"> Pessoa Física
                    </label>

                    <label>
                        <input type="radio" name="opcao"> Pessoa Física
                    </label>
                </div>

                <button type="submit" class="btn btn-success">Salvar</button>

            </form>
        </div>
    </div>
</form>

</body>
</html>