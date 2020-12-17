$(document).ready(function () {
    let CPF = $("#CPF");
    CPF.mask('999.999.999-99');
    $('#teste').on('click', '#cadastrar', function () {
        let username = $("#Username").val();
        let senha = $("#Senha").val();
        let email = $("#Email").val();
        let CPF = $("#CPF").val();
        let nascimento = $("#dt-nascimento").val();
        let cidade = $("#Cidade").val();
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
                Cidade: cidade
            },
            success: function (rs) {
                // alert(rs)
                $(rs).show().fadeOut(3000);
                $("#Email").val("");
                $("#Username").val("");
                $("#CPF").val("");
                $("#Senha").val("");
                $("#Cidade").val("");
                $("#dt-nascimento").val("");
            },
            error: function (e) {
                bootbox.alert("<h2>Erro :(</h2><br/>Não foi possivel realizar essa operação.</br>");
            }
        });

    });

});

