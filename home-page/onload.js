function alerta2() {
    Swal.fire({
        title: "Você deseja fazer login?",
        text: "Será necessário caso queira usar as funcionalidades do site!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Sim, desejo!",
        cancelButtonText: "Cancelar"
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirecionar para a página de login
            window.location.href = "http://127.0.0.1:5501/signin/signin.html";
        }
        // Caso contrário, o usuário permanece na página atual
    });
}

// Verificar se o usuário está logado
document.addEventListener("DOMContentLoaded", function() {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                // Se o usuário não estiver logado, chamar a função alerta2()
                if (!response.loggedIn) {
                    alerta2();
                }
            } else {
                console.error('Ocorreu um erro ao verificar o status da sessão.');
            }
        }
    };
    xhr.open("GET", "https://localhost/ordermilk1/check_session.php", true);
    xhr.send();
});