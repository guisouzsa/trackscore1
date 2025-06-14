<?php 
include_once '../login/protect.php'; 
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.typekit.net/ysp4tri.css" />
    <title>Trackscore</title>
</head>
<body>
    <header>
        <nav id="nav_principal">

            <div id="logo_img">
                <img src="foto/logo.png" alt="Logo da Trackscore">
            </div>

            <div>
                <form action="#" method="get">
                    <div>
                        <input type="text" placeholder="Pesquise por avaliações" name="pesquisar" id="pesquisa_box">
                    </div>
                </form>
            </div>
            
            <div id="div_avaliar" >
                <div>
                    <a href="upload_ava.php" id="botao_avaliar">Crie sua avaliação</a>
                </div>
            </div>

        </nav>
    </header>

    <main>
        <div class="divs_principais">
            <div class="div1">
                <p><a id="button_logout" href="../login/logout.php">Sair</a></p>
            </div>
            <div class="div2">
            </div>
        </div>
    </main>
</body>
</html>
