<?php
    if(isset($_POST['submit']))
    {
        print_r($_POST['brinco']);
        print_r($_POST['nomeAnimal']);
        print_r($_POST['idade']);
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OrderMilk</title>
    <link rel="stylesheet" href="/cadastro-page copy/cadastro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-light" style="background-color: #2A66B1;">
        <div class="container justify-content-center">
            <a class="navbar-brand" href="/home-page/home.html">
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
                        <i class='bx bx-search'></i>
                        <input type="text" placeholder="Pesquisar...">
                    <span class="tooltip">Pesquisar</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-user'></i>
                        <span class="links_name">Usuário</span>
                    </a>
                    <span class="tooltip">Usuário</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-chat'></i>
                        <span class="links_name">Contato</span>
                    </a>
                    <span class="tooltip">Contato</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-pie-chart-alt-2'></i>
                        <span class="links_name">Produção</span>
                    </a>
                    <span class="tooltip">Produção</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-folder'></i>
                        <span class="links_name">Rebanho</span>
                    </a>
                    <span class="tooltip">Rebanho</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-cart'></i>
                        <span class="links_name">Lactantes</span>
                    </a>
                    <span class="tooltip">Lactantes</span>
                </li>
                <li>
                    <a href="#">
                        <i class='bx bx-heart'></i>
                        <span class="links_name">Saúde</span>
                    </a>
                    <span class="tooltip">Saúde</span>
                </li>
                <li>
                    <a href="#">
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
                    <i class='bx bx-log-out' id="log_out"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="home_content">

        <br><br>
        <h1>Cadastrar Animal</h1>
        <form id="cadastroForm" action="cadastro.php" method="POST">

            <label for="brinco">Número do Brinco:</label>
            <input type="text" id="brinco" name="brinco"><br>

            <label for="nomeAnimal">Nome do Animal:</label>
            <input type="text" id="nomeAnimal" name="nomeAnimal"><br>

            <label for="idade">Idade:</label>
            <input type="number" id="idade" name="idade"><br>

            <label for="lote">Lote:</label>
            <input type="text" id="lote" name="lote"><br>

            <label for="pai">Pai:</label>
            <input type="text" id="pai" name="pai"><br>

            <label for="mae">Mãe:</label>
            <input type="text" id="mae" name="mae"><br>

            <label for="mae">Crias:</label>
            <input type="text" id="crias" name="crias"><br>

            <input type="submit" value="Cadastrar">
        </form>



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

    <script>
        document.getElementById('cadastroForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Aqui você pode adicionar a lógica para lidar com a submissão do formulário
        // Por exemplo, você pode validar os inputs ou enviar os dados para um servidor
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>