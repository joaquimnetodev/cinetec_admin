function mostrarconteudo1() {
    let elemento1 = document.getElementById('content1'); //abageral
    elemento1.style.display = 'flex';
    let abageral = document.getElementById('aba1');
    abageral.style.backgroundColor = 'var(--color1)';
    let elemento2 = document.getElementById('content2'); //abaitens
    elemento2.style.display = 'none';
    let abaitens = document.getElementById('aba2');
    abaitens.style.backgroundColor = 'var(--color4)';
}

function mostrarconteudo2() {
    let elemento1 = document.getElementById('content1');
    elemento1.style.display = 'none';
    let aba1 = document.getElementById('aba1');
    aba1.style.backgroundColor = 'var(--color4)';
    let elemento2 = document.getElementById('content2');
    elemento2.style.display = 'flex';
    let aba2 = document.getElementById('aba2');
    aba2.style.backgroundColor = 'var(--color1)';
}

function mostrarconteudo3() {
    let elemento1 = document.getElementById('content1');
    elemento1.style.display = 'none';
    let aba1 = document.getElementById('aba1');
    aba1.style.backgroundColor = 'var(--color4)';
    let elemento2 = document.getElementById('content2');
    elemento2.style.display = 'none';
    let aba2 = document.getElementById('aba2');
    aba2.style.backgroundColor = 'var(--color4)';
}

