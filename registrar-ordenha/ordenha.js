document.getElementById('ordenhaForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita o comportamento padrão do formulário

    // Obtém os valores do formulário
    var data = document.getElementById('data').value;
    var ordenha = document.getElementById('ordenha').value;
    var litros = document.getElementById('litros').value;
    var vacas = document.getElementById('vacas').value;

    // Armazena os valores no localStorage
    localStorage.setItem('data', data);
    localStorage.setItem('ordenha', ordenha);
    localStorage.setItem('litros', litros);
    localStorage.setItem('vacas', vacas);

    // Redireciona para a página que mostra os dados
 
});