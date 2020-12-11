$(document).ready(function () {
    let CPF = $("#CPF");
    CPF.mask('999.999.999-99');

    $('#teste').on('click', '#cadastrar', function () {
        let Username = $("#Username").val();
        let Senha = $("#Senha").val();
        let Email = $("#Email").val();
        let CPF = $("#CPF").val();
        let Nascimento = $("#dt-nascimento").val();
        let Cidade = $("#Cidade").val();
        console.log("Username: " + Username + " Senha: " + Senha + " Email: " + Email + " CPF: " + CPF + " Nascimento: " + Nascimento + " Cidade: " + Cidade);
        let url = '../crud/class/index.php';
        $.ajax({
            type: 'post',
            dataType: 'json',
            url: url,
            async: true,
            data: {
                rq: 'cadastrar',
                Username: Username,
                Senha: Senha,
                Email: Email,
                CPF: CPF,
                Nascimento: Nascimento,
                Cidade: Cidade
            },
            success: function (response) {
                $('#alerta').show().fadeOut(3000);
            },
            error: function (e) {
                bootbox.alert("<h2>Erro :(</h2><br/><center>Não foi possivel realizar essa operação.</center></br>");
            }
        });

    });

});

