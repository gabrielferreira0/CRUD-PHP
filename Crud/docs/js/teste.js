$(document).ready(function () {
    let CPF = $("#CPF");
    CPF.mask('999.999.999-99');

    $('#teste').on('click', '#cadastrar', function () {
        $('#alerta').show().fadeOut(3000);
        let Username = $("#Username").val();
        let Senha = $("#Senha").val();
        let Email = $("#Email").val();
        let CPF = $("#CPF").val();
        let Nascimento = $("#dt-nascimento").val();
        let Cidade = $("#Cidade").val();
        console.log("Username: " + Username + " Senha: " + Senha + " Email: " + Email + " CPF: " + CPF + " Nascimento: " + Nascimento + " Cidade: " + Cidade);
    });

});

