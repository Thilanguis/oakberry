//botão adicionar form cadastro franqueados
$(document).ready(function () {
    $('.addTel1').hide();
    $('#whatsapp').click(function () {
        $('.addTel1').toggle();
    });
});

//botão remover form cadastro franqueados
$(document).ready(function () {
    $('.franqueado').hide();
    $('#adicionar').click(function () {
        $('.franqueado').show();
    });
});

//menu dos franqueados
$(document).ready(function () {
    $('#remover').click(function () {
        $('.franqueado').hide();
    });
});

$(document).ready(function () {


    var Menu = {

        body: $('.menu'),
        button: $('.button'),
        tools: $('.tools')

    };

    Menu.button.click(function () {
        Menu.body.toggleClass('menu--closed');
        Menu.body.toggleClass('menu--open');
        Menu.tools.toggleClass('tools--visible');
        Menu.tools.toggleClass('tools--hidden');
    });


});
