
function troca(elemento) {

    // pega o .resposta dentro do elemento clicado
    var resposta = elemento.nextElementSibling.querySelector('.resposta');

    var seta = elemento.querySelector('.seta');


    // alterna o display
    if (resposta.style.display === 'block') {
        resposta.style.display = 'none';
        seta.setAttribute('style', 'transform: rotate( 0deg );')
    }
    else {
        resposta.style.display = 'block';
        seta.setAttribute('style', 'transform: rotate( 90deg );')
    }

}

// TÁ ADICIONANDO INPUT SÓ EM "CURSOS"