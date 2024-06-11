<?php

    include("conexao.php");

    $consulta = "SELECT * FROM cadastro_animal";

    $con = $mysqli->query($consulta) or die($mysqli->error);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderMilk</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="rebanho.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-light" style="background-color: #2A66B1;">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="http://127.0.0.1:5501/home-page/home.html">
                <img src="img/logo.png" alt="" width="150" height="50" class="d-inline-block align-top">
            </a>
        </div>
    </nav>

    <!--sidebar-->
    <div class="sidebar">
        <div class="logo_content">
            <div class="logo">
                <div class="logo_name">
                    <img src="img/logo.png" alt="" width="150" height="50">
                </div>
            </div>
            <i class='bx bx-menu' id="btn"></i>
            <ul class="nav_list">
                <li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="links_name">Usuário</span>
                    </a>
                    <span class="tooltip">Usuário</span>
                </li>
                <li>
                    <a href="http://127.0.0.1:5501/contato-page/contato.html">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">Contato</span>
                    </a>
                    <span class="tooltip">Contato</span>
                </li>
                <li>
                    <a href="http://127.0.0.1:5501/producao-page/produ%C3%A7%C3%A3o.html">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="links_name">Produção</span>
                    </a>
                    <span class="tooltip">Produção</span>
                </li>
                <li>
                    <a href="https://localhost/ordermilk1/rebanho/rebanho.php">
                        <i class='bx bx-folder'></i>
                        <span class="links_name">Rebanho</span>
                    </a>
                    <span class="tooltip">Rebanho</span>
                </li>
                <li>
                <a href="/registrar-ordenha/ordenha.html">
                        <i class='bx bx-cart'></i>
                        <span class="links_name">Registrar Ordenha</span>
                    </a>
                    <span class="tooltip">Registrar Ordenha</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-heart'></i>
                        <span class="links_name">Saúde</span>
                    </a>
                    <span class="tooltip">Saúde</span>
                </li>
                <li>
                    <a href="http://127.0.0.1:5501/config-page/config.html">
                        <i class='bx bx-cog'></i>
                        <span class="links_name">Configurações</span>
                    </a>
                    <span class="tooltip">Configurações</span>
                </li>
            </ul>
            <div class="profile_content">
                <div class="profile">
                    <div class="profile_details">
                        <img src="/home-page/img/user.jpg" alt="">
                        <div class="name_job">
                            <div class="name">Victor Matos</div>
                            <div class="job">Produtor</div>
                        </div>
                    </div>
                    <button class="onClick" onclick="alerta()">
                    <i class='bx bx-log-out' id="log_out"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Conteudo-->
    <div class="home_content">
        <div class="lista">
            
            <h1>Rebanho</h1>
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="  Filtrar...">

            <table id="myTable">
            <tr class="header">
                <th style="width:20%;">Código</th>
                <th style="width:20%;">Nome</th>
                <th style="width:20%;">Lote</th>
                <th style="width:20%;">Idade</th>
                <th style="width:20%;">Link</th>
            </tr>

            <?php while($dado = $con->fetch_array()){ ?>
            <tr>
                <td> <?php echo $dado["nº_brinco"]; ?> </td>
                <td> <?php echo $dado["nome"]; ?> </td>
                <td> <?php echo $dado["lote"]; ?> </td>
                <td> <?php echo $dado["idade"]; ?> </td>
                <td><a class="link" href="paginaA.html"><img src="img/lupa.png" width="20px" height="20px"></a></td>
            </tr>
            <?php }?>

            </table>
        </div>


    </div>

    <!--sidebar-->
    <script>
        let btn = document.querySelector("#btn");
        let sidebar = document.querySelector(".sidebar");
        let searchBtn = document.querySelector(".bx-search");
        let userBtn = document.querySelector(".bx-user");
        let messagesBtn = document.querySelector(".bx-chat");
        let analyticsBtn = document.querySelector(".bx-pie-chart-alt-2");
        let filemanagerBtn = document.querySelector(".bx-folder");
        let orderBtn = document.querySelector(".bx-cart");
        let savedBtn = document.querySelector(".bx-heart");
        let settingsBtn = document.querySelector(".bx-cog");
        

        btn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    
        searchBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }

        userBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }

        messagesBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }

        analyticsBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }

        filemanagerBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }

        orderBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }
        
        savedBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }

        settingsBtn.onclick = function() {
            sidebar.classList.toggle("active");
        }
    </script>

    <!--Lista-->
    <script>
        function myFunction() {
            var input, filter, table, tr, td, i, j, txtValue, showRow;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            for (i = 1; i < tr.length; i++) { // Começa em 1 para pular o cabeçalho
                tr[i].style.display = "none"; // Oculta a linha inicialmente
                td = tr[i].getElementsByTagName("td");
                for (j = 0; j < td.length; j++) {
                    if (td[j]) {
                        txtValue = td[j].textContent || td[j].innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            tr[i].style.display = "";
                            break; // Encontra correspondência e exibe a linha, depois sai do loop interno
                        }
                    }
                }
            }
        }
    </script>
    <script >
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
</script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.11.0/dist/sweetalert2.all.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>