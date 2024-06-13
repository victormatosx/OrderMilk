function alerta(){
  Swal.fire({
      title: "Você deseja sair?",
      text: "Você não poderá reverter isto!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Sim, quero sair!",
      cancelButtonText: "Cancelar"
  }).then((result) => {
      if (result.isConfirmed) {
          Swal.fire({
              title: "Saindo!",
              text: "Sessão Finalizada.",
              icon: "success"
          }).then(() => {
              // Redirecionar para o script de logout quando o usuário confirmar o logout
              window.location.href = 'https://localhost/ordermilk1/logout.php';
          });
      }
  });
}
