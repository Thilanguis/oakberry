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

//Mostrar menu pedidos
$(document).ready(function () {
    $('.menuPedidos').hide();
    $('.fa-shopping-cart').click(function () {
        $('.menuPedidos').toggle();
    });
});

//Mostrar menu dúvidas
$(document).ready(function () {
    $('.accordion').hide();
    $('.fa-question').click(function () {
        $('.accordion').toggle();
    });
});

//Mostrar formulário de edição
$(document).ready(function () {
    $('.editarCadastroFranqueados').hide();
    $('.editar').click(function () {
        $('.editarCadastroFranqueados').toggle();
    });
});

//Fechar formulário de edição
$(document).ready(function () {
    $('.editarCadastroFranqueados').hide();
    $('.fa-times').click(function () {
        $('.editarCadastroFranqueados').hide();
    });
});

//Mostrar texto input whatsapp
$(document).ready(function () {
    $('.inputWhatsapp').hide();
    $('.whatsapp').click(function () {
        $('.inputWhatsapp').toggle();
    });
});

//Fechar texto input whatsapp
$(document).ready(function () {
    $('.inputWhatsapp').hide();
    $('.fa-times').click(function () {
        $('.inputWhatsapp').hide();
    });
});

//Mostrar formulário cadastro colaboradores
$(document).ready(function () {
    $('.formularioColaboradores').hide();
    $('.fa-user-plus').click(function () {
        $('.formularioColaboradores').toggle();
    });
});

//Mostrar tabela colaboradores
$(document).ready(function () {
    $('.tabelaColaboradores').hide();
    $('.fa-tablet-alt').click(function () {
        $('.tabelaColaboradores').toggle();
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

//Tabela de pesquisa de franqueados administrador
$(document).ready(function () {
    $('.1').show();
    $('.a').click(function () {
        $('.1').toggle();
    });
});
$(document).ready(function () {
    $('.2').show();
    $('.b').click(function () {
        $('.2').toggle();
    });
});
$(document).ready(function () {
    $('.3').show();
    $('.c').click(function () {
        $('.3').toggle();
    });
});
$(document).ready(function () {
    $('.4').show();
    $('.d').click(function () {
        $('.4').toggle();
    });
});
$(document).ready(function () {
    $('.5').show();
    $('.e').click(function () {
        $('.5').toggle();
    });
});
$(document).ready(function () {
    $('.6').show();
    $('.f').click(function () {
        $('.6').toggle();
    });
});
$(document).ready(function () {
    $('.7').show();
    $('.g').click(function () {
        $('.7').toggle();
    });
});
$(document).ready(function () {
    $('.8').show();
    $('.h').click(function () {
        $('.8').toggle();
    });
});
$(document).ready(function () {
    $('.9').show();
    $('.i').click(function () {
        $('.9').toggle();
    });
});
$(document).ready(function () {
    $('.10').show();
    $('.j').click(function () {
        $('.10').toggle();
    });
});
$(document).ready(function () {
    $('.11').show();
    $('.k').click(function () {
        $('.11').toggle();
    });
});
$(document).ready(function () {
    $('.12').show();
    $('.l').click(function () {
        $('.12').toggle();
    });
});
$(document).ready(function () {
    $('.13').show();
    $('.m').click(function () {
        $('.13').toggle();
    });
});
$(document).ready(function () {
    $('.14').show();
    $('.n').click(function () {
        $('.14').toggle();
    });
});
$(document).ready(function () {
    $('.15').show();
    $('.o').click(function () {
        $('.15').toggle();
    });
});
$(document).ready(function () {
    $('.16').show();
    $('.p').click(function () {
        $('.16').toggle();
    });
});
$(document).ready(function () {
    $('.17').show();
    $('.q').click(function () {
        $('.17').toggle();
    });
});
$(document).ready(function () {
    $('.18').show();
    $('.r').click(function () {
        $('.18').toggle();
    });
});
$(document).ready(function () {
    $('.19').show();
    $('.s').click(function () {
        $('.19').toggle();
    });
});
$(document).ready(function () {
    $('.20').show();
    $('.t').click(function () {
        $('.20').toggle();
    });
});

//Deslogar do sistema
function deslogarDoSistema() {

    var nome = document.getElementById("bemVindo").value;

    if (confirm("Deseja deslogar " + nome + "?")) {
        location.href = 'deslogar.php';
    }
}

//Sumir div mensagem atualização
setTimeout(function () {
    $('#sumirDiv').hide('fast');
}, 5000);

//Demitir colaborador e adicionar na adicionarBlacklist
function adicionarBlacklist(id) {

    if (confirm('Deseja realmente excluir este Colaborador?')) {
        location.href = 'adicionarBlacklist.php?id=' + id;
    }
}

//Mostrar tamanho e esconder boné
function ShowHideBone(bone) {
    var quantidadeBone = document.getElementById("quantidadeBone");
    quantidadeBone.style.display = bone.checked ? "block" : "none";
}

//Mostrar tamanho e esconder tamanho camisas
function ShowHideCamisa(camisa) {
    var camisaP = document.getElementById("camisaP");
    camisaP.style.display = camisa.checked ? "block" : "none";
}

//Mostrar tamanho e esconder quantidade camisas P
function ShowHideQuantidadeP(tamanhoCamisaP) {
    var quantidadeCamisaP = document.getElementById("quantidadeCamisaP");
    quantidadeCamisaP.style.display = tamanhoCamisaP.checked ? "block" : "none";
}

//Mostrar tamanho e esconder quantidade camisas M
function ShowHideQuantidadeM(tamanhoCamisaM) {
    var quantidadeCamisaM = document.getElementById("quantidadeCamisaM");
    quantidadeCamisaM.style.display = tamanhoCamisaM.checked ? "block" : "none";
}

//Mostrar tamanho e esconder quantidade camisas G
function ShowHideQuantidadeG(tamanhoCamisaG) {
    var quantidadeCamisaG = document.getElementById("quantidadeCamisaG");
    quantidadeCamisaG.style.display = tamanhoCamisaG.checked ? "block" : "none";
}

//Mostrar tamanho e esconder moletom
function ShowHideMoletom(moletom) {
    var moletomP = document.getElementById("moletomP");
    moletomP.style.display = moletom.checked ? "block" : "none";
}

//Mostrar tamanho e esconder quantidade camisas P
function ShowHideQuantidadeMoletomP(tamanhoMoletomP) {
    var quantidadeMoletomP = document.getElementById("quantidadeMoletomP");
    quantidadeMoletomP.style.display = tamanhoMoletomP.checked ? "block" : "none";
}

//Mostrar tamanho e esconder quantidade camisas M
function ShowHideQuantidadeMoletomM(tamanhoMoletomM) {
    var quantidadeMoletomM = document.getElementById("quantidadeMoletomM");
    quantidadeMoletomM.style.display = tamanhoMoletomM.checked ? "block" : "none";
}

//Mostrar tamanho e esconder quantidade camisas G
function ShowHideQuantidadeMoletomG(tamanhoMoletomG) {
    var quantidadeMoletomG = document.getElementById("quantidadeMoletomG");
    quantidadeMoletomG.style.display = tamanhoMoletomG.checked ? "block" : "none";
}

//Mostrar tamanho e esconder crachá
function ShowHideCracha(cracha) {
    var quantidadeCracha = document.getElementById("quantidadeCracha");
    quantidadeCracha.style.display = cracha.checked ? "block" : "none";
}

function pedidoUniforme() {
    if (confirm('Deseja solicitar os pedidos selecionados?')) {
        location.href = 'pedidoUniforme.php';
    }
}
