$(document).ready(function () {
    let CPF = $("#CPF");
    CPF.mask('999.999.999-99');

    let telefone = $("#Telefone");
    telefone.mask('(00) 0000-0000');






    $('#Conteudo').on('click', '#Login', function () {
        let loginHTML = '\ <div class="card cardFormulario col-md-3">\
            <div class="card-body" id="card-body">\
                <h3 class="fas fa-users titulo"> Login </h3>\
                <form id="formulario" class="formulario" data-toggle="validator">\
                    <div class="form-row">\
                        <div class="form-group col-md-12">\
                            <label for="CPF">CPF:</label>\
                            <div class="input-group">\
                                <div class="input-group-prepend">\
                                    <span class="input-group-text arredondar"> <i class="fas fa-id-card-alt"></i></span>\
                                </div>\
                                <input type="text" class="form-control arredondar" id="CPF" placeholder="123.123.123-00"\
                                       max="11" data-error="Por favor, informe um CPF correto." required>\
                            </div>\
                            <div class="error help-block with-errors"></div>\
                        </div>\
                    </div>\
                    <div class="form-row">\
                        <div class="form-group col-md-12">\
                            <label for="Senha">Senha:</label>\
                            <div class="input-group">\
                                <div class="input-group-prepend">\
                                    <span class="input-group-text arredondar"> <i class="fas fa-lock"></i></span>\
                                </div>\
                                <input type="password" class="form-control arredondar" id="Senha" placeholder="Senha"\
                                       required>\
                            </div>\
                            <div class="error help-block with-errors"></div>\
                        </div>\
                    </div>\
                    </form>\
            </div>\
            <button id="Logar" type="button" class="Entrar btn btn btn arredondar">Login</button>\
            <a href="#!" class="login-card-footer-text">Esqueceu a senha?</a>\
            <p class="login-card-footer-text">Não possui uma conta? <a href="index.php" class="login-card-footer-text">Cadastrar-se\
                    aqui</a></p>\
        </div>';
        $('.cardFormulario').remove();
        $('.nhanhanha').append(loginHTML);
    });

    // $('#Conteudo').on('click', '#Registrar', function () {
    //     // $('.card-body').append('TESTE TESTE TESTE');
    //     $('.cardFormulario').remove();
    // });


    $('#Conteudo').on('click', '#cadastrar', function () {
        let username = $("#Username").val();
        let senha = $("#Senha").val();
        let email = $("#Email").val();
        let CPF = $("#CPF").val();
        let nascimento = $("#dt-nascimento").val();
        let cidade = $("#Cidade").val();
        let telefone = $('#Telefone').val();
        let UF = $("#UF option:selected").val();
        let url = '../crud/class/index.php';
        $.ajax({
            type: "POST",
            dataType: 'text',
            url: url,
            async: true,
            data: {
                rq: 'cadastrar',
                Username: username,
                Senha: senha,
                Email: email,
                CPF: CPF,
                Nascimento: nascimento,
                Cidade: cidade,
                Telefone: telefone,
                UF: UF,
            },
            success: function (rs) {
                alert(rs)
                switch (rs) {
                    case 'nomeC':
                        $("#alerta3").show().fadeOut(4000);
                        break;
                    case 'emailC':
                        $("#alerta4").show().fadeOut(4000);
                        break;
                        s
                    case 'cpfC':
                        $("#alerta5").show().fadeOut(4000);
                        break;
                    case 'null':
                        $("#alerta6").show().fadeOut(4000);
                        break;
                    case 'CPFinvalido':
                        $("#alerta7").show().fadeOut(4000);
                        break;
                    case '#alerta':
                        $(rs).show().fadeOut(4000);
                        $("#Email").val("");
                        $("#Username").val("");
                        $("#CPF").val("");
                        $("#Senha").val("");
                        $("#Cidade").val("");
                        $("#dt-nascimento").val("");
                        $("#Telefone").val("");
                        $("#UF").val("UF");
                        break;
                }

            },
            error: function (e) {
                bootbox.alert("<h2>Erro :(</h2><br/>Não foi possivel realizar essa operação.</br>");
            }
        });

    });

});

