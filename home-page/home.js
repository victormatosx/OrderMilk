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
          });
          sair();
        }
      });
}

