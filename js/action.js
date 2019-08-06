$(document).ready(function () {
    $('.addTel1').hide();
    $('#whatsapp').click(function () {
        $('.addTel1').toggle();
    });
});

$(document).ready(function () {
    $('.franqueado').hide();
    $('#adicionar').click(function () {
        $('.franqueado').show();
    });
});

$(document).ready(function () {
    $('#remover').click(function () {
        $('.franqueado').hide();
    });
});
