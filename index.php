<?php
session_start();
require('./functions/routes.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="css/style.css">
    <?php if(isset($css)): ?>
    <link rel="stylesheet" href="css/<?=$css;?>">
    <?php endif; ?>
    <title>Brigadeleiros <?= $title != '' ? '-' : ''; ?> <?=$title;?></title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-white mb-5">
            <div class="container-fluid navbar-content">
               
                <a class="navbar-brand" href="?page=home"> <img src="images/logo.jpg" alt="Logo" class="img-responsive logo"> </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'home' ? 'active' : null ?>" aria-current="page" href="?page=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'quem-somos' ? 'active' : null ?>" href="?page=quemsomos">Quem Somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $page == 'localizacao' ? 'active' : null ?>" href="?page=localizacao">Localização</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link <?= $page == 'contato' ? 'active' : null ?>" href="?page=contato">Contato</a>
                    </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <section class="container">
        <?php require("./pages/$page.php"); ?>
    </section>
    


    <footer class=" footer">
        <div class="footer-content">
            <div>
                <p>Taianne Fenandes Chiarioni<br>RA: 20049221-5</p>
            </div>
            <div>
                <h5>Redes Sociais:</h5>
                <div class="social-media">
                    <a href="https://www.instagram.com/taichiarioni/"> <i class="fab fa-instagram"></i></a>
                    <a href="https://www.linkedin.com/in/taianne-fernandes/"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            
        </div>
        
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


