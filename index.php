<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0,, viewport-fit=cover">
    <meta name="color-scheme" content="light dark">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
    <SCRipt scr="js/jquery.js"></SCRipt>
    <script scr="bootstrap/js/bootstrap.js"></script>
    <script scr="js/funcoes.js"></script>
    <title>SISTEMMA DE AGENDAMENTO - CLIENTE</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary col-12"></nav>
            <a class="navbar-brand" href="#">SISTEMA WEB</a>
            <button class="navbar-togglet" type="button" data-togglet="collapse" data-targe="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggle-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-iten active">
                        <a class="nav-link" href="index.php">Cadastrar <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="consultarClientes.php"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="card mb-3 col-12" >
                <div class="card-body" >
                    <h5 class="card-title">Cadastrar - Agendamento de potenciais clientes</h5>
                    <p class="card-text">Sistema utilizado para agendamento do serviço.</p>
                    <p>
                        <form method="post" action="controller/ControllerCadastro.php?funcao=cadastro" id="from" name="form">
                            <div class="form-group">
                                <label for="exemploFormControlImput1">Nome:</label>
                                <input type="text" class="form-control" name="txtNome" required id="txtNome">
                            </div>
                            <div class="form-group">
                                <label for="exemploFormControlImput1">Telefone:</label>
                                <input type="tel" class="form-control" name="txtTelefone" required id="txtTelefone" placeholder="(xx)xxxxx-xxxx">
                            </div>
                            <div class="form-group">
                                <label for="exemploFormControlImput1">Origem:</label>
                                <select class="form-control" name="txtOrigem" required id="txtOrigem">
                                    <option>Celular</option>
                                    <option>Fixo</option>
                                    <option>Whatsapp</option>
                                    <option>Facebook</option>
                                    <option>Instagram</option>
                                    <option>Google Meu Negocio</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exemploFormControlImput1">Data do contato:</label>
                                <input type="date" class="form-control" required name="txtDataContato" id="txtdataContato">
                            </div>
                            <div class="form-group">
                                <label for="exemploFormControlTextarea1">Observação:</label>
                                <br>
                                <div class="span9">
                                <textarea class="form-control" name="txtObservacao" id="txtObservacao" cols="100" rows="3"></textarea>
                                </div>
                            </div>
                            <button type="submit" id="btnInserir" class="btn btn-primary">Cadastrar</button>
                        </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>