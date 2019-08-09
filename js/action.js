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

//Mostrar texto input whatsapp
$(document).ready(function () {
    $('.inputWhatsapp').hide();
    $('.whatsapp').click(function () {
        $('.inputWhatsapp').show();
    });
});

//Fechar texto input whatsapp
$(document).ready(function () {
    $('.inputWhatsapp').hide();
    $('.fa-times').click(function () {
        $('.inputWhatsapp').hide();
    });
});

//Integração com api do whatsapp para telefone Bárbara
function mensagemWhatsapp(mensagemWhatsapp) {

    var celular = "5521996302949";

    var texto = document.getElementById("textoWhatsapp").value;
    texto = window.encodeURIComponent(texto);

    window.open("https://api.whatsapp.com/send?phone=" + celular + "&text=" + texto, "_blank");
    //Obs.. use "_system", no lugar de blank, caso você esteja usando Phonegap / Cordova / Ionic ou qualquer um baseado em webview;
}

//Mostrar formulário de edição
$(document).ready(function () {
    $('.editarCadastroFranqueados').hide();
    $('.editar').click(function () {
        $('.editarCadastroFranqueados').show();
    });
});

//Fechar formulário de edição
$(document).ready(function () {
    $('.editarCadastroFranqueados').hide();
    $('.fa-times').click(function () {
        $('.editarCadastroFranqueados').hide();
    });
});
