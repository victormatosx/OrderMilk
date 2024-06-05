document.getElementById('ordenhaForm').addEventListener('submit', function(e) {
    e.preventDefault();

    // Obtendo valores dos campos do formulário
    const data = document.getElementById('data').value;
    const ordenha = document.getElementById('ordenha').value;
    const litros = document.getElementById('litros').value;
    const vacas = document.getElementById('vacas').value;

    // Exibindo resultado
    const resultado = document.getElementById('resultado');
    resultado.innerHTML = `<p><strong>Registro de Ordenha:</strong></p>
                           <p>Data: ${data}</p>
                           <p>Ordenha: ${ordenha}ª</p>
                           <p>Litros: ${litros}</p>
                           <p>Número de Vacas Ordenhadas: ${vacas}</p>`;

    // Opcional: Limpar formulário após submissão
    document.getElementById('ordenhaForm').reset();
});
