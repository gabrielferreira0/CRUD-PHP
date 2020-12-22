<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro teste</title>
    <link href="docs/fonts/fontawesome/5.12.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="docs/plugins/bootstrap-4.1.3-dist/css/bootstrap.min.css">
    <script src="docs/plugins/jquery/jquery-3.4.1.min.js"></script>
    <script src="docs/plugins/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <script src="docs/plugins/bootstrap-4.1.3-dist/js/popper.min.js"></script>
    <script src="docs/plugins/jquery/jquery.mask.js"></script>
    <script src="docs/plugins/bootbox/bootbox.all.min.js"></script>
    <script src="docs/js/teste.js"></script>
    <link rel="stylesheet" href="docs/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <script src="docs/plugins/bootstrap-4.1.3-dist/js/validator.min.js"></script>
</head>


<body id="Conteudo">

<div class="navbar  navbar-expand-sm  navbar-dark bg-dark mb-4 menu " role="navigation">
    <i class="fas fa-user-astronaut nasa"></i>
    <a class="navbar-brand arredondar " href="#">Treinando</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse menu" id="navbarCollapse">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link arredondar" href="" target="_blank">Contato</a>
            </li>
            <li class="nav-item">
                <a class="nav-link arredondar" href="" target="_blank">Sobre Nós</a>
            </li>
        </ul>
        <div class="d-flex justify-content-center">
            <a class="nav-link  text-center loginInput" id='Login' href="">Login</a>
            <a class="nav-link text-center destaque" id='Registrar' href="#">Cadastrar</a>
        </div>
        <div class="d-flex align-items-center ">
            <input class="form-control mr-sm-2 " type="text" placeholder="Pesquisar" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
        </div>
    </div>
</div>

<div class="container-fluid ">

    <div class="d-flex justify-content-center geral">

<!--        inicia aqui-->

        <div class="card cardFormulario col-md-3">

            <div class="card-body" id="card-body">

                <h3 class="fas fa-users titulo"> Login </h3>
                <form id="formulario" class="formulario" data-toggle="validator">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="CPF">CPF:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text arredondar"> <i class="fas fa-id-card-alt"></i></span>
                                </div>
                                <input type="text" class="form-control arredondar" id="CPF" placeholder="123.123.123-00"
                                       max="11" data-error="Por favor, informe um CPF correto." required>
                            </div>
                            <div class="error help-block with-errors"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="Senha">Senha:</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text arredondar"> <i class="fas fa-lock"></i></span>
                                </div>
                                <input type="password" class="form-control arredondar" id="Senha" placeholder="Senha"
                                       required>
                            </div>
                            <div class="error help-block with-errors"></div>
                        </div>
                    </div>
                    </form>
            </div>


            <button id="Logar" type="button" class="Entrar btn btn btn arredondar">Login</button>
            <a href="#!" class="login-card-footer-text">Esqueceu a senha?</a>
            <p class="login-card-footer-text">Não possui uma conta? <a href="index.php" class="login-card-footer-text">Cadastrar-se
                    aqui</a></p>
        </div>

<!--        termina aqui-->

    </div>
</div>
<!-- Footer -->
<footer class="bg-dark ">
    <!-- Copyright -->
    <div style="color:aliceblue;" class="footer-copyright text-center py-3">© 2020 desenvolvido por:
        <a> @Gabrovsski </a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
