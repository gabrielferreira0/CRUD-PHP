$(document).ready(function () {
    let CPF = $("#CPF");
    CPF.mask('999.999.999-99');

    let telefone = $("#Telefone");
    telefone.mask('(00) 0000-0000');


    let loginHTML = '\ <div class="alert alert-primary alert-dismissible fade show" role="alert">\
                        <strong>TESTE 123456789</strong>\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                          <span aria-hidden="true">&times;</span>\
                        </button>\
                      </div> ';



    $('#Conteudo').on('click', '#Login', function () {
        ('.cardLogin').s

    });


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

