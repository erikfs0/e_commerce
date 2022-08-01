<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>MotorCicle</title>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-md">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
                    aria-label="Toggle navigation" id="botao">
                    <span class="navbar-toggler-icon" style="width:50%; margin-top:-3px" ;></span>

                    <ul class="menu">
                        <a href="#">
                            <li>Categorias</li>
                        </a>
                        <a href="#">
                            <li>Acessórios</li>
                        </a>
                        <a href="#">
                            <li>Serviços</li>
                        </a>
                        <a href="#">
                            <li>Empresa</li>
                        </a>
                        <a href="#">
                            <li>Ajuda</li>
                        </a>
                    </ul>
                </button>
                <div class="small">
                    <img src="img/logo-small.png" alt="" style="width:20vh;">
                    <a href="#"><img src="img/login-small.png" alt="" style="width:4vh;"></a>
                    <a href="#"><img src="img/cadastro-small.png" alt="" style="width:4vh;"></a>
                </div>



                <div class="collapse navbar-collapse " id="navbarTogglerDemo01"
                    style="justify-content: center; justify-content: space-around;">
                    <a class="navbar-brand" href="index.php"> <img src="img/logo.png" alt=""> </a>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit" style="padding-top:0px;">Buscar</button>
                    </form>

                    <div class="enter">
                        <div class="login">
                            <a href="#"> <img src="img/login.png" alt="">Entrar</a>
                        </div>
                        <div class="cadastro">
                            <a href="#"> <img src="img/cadastro.png" alt="">Cadastrar</a>

                        </div>
                    </div>

                </div>

            </div>
        </nav>
    </div>

    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

        <ul class="menu2">
            <a href="#">
                <li>Categorias</li>
            </a>
            <a href="#">
                <li>Acessórios</li>
            </a>
            <a href="#">
                <li>Serviços</li>
            </a>
            <a href="#">
                <li>Empresa</li>
            </a>
            <a href="#">
                <li>Ajuda</li>
            </a>
        </ul>

        <div class="carousel-inner" style="z-index: 0;
    position: absolute" ;>

            <div class="carousel-item active">

                <img src="img/fundo1.jpg" class="d-block w-100" style="height:75vh" ; alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/fundo2.jpg" class="d-block w-100" style="height:75vh" ; alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/fundo3.jpg" class="d-block w-100" style="height:75vh" ; alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev"
            style="margin-top:230px" ;>
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next"
            style="margin-top:230px" ;>
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>








    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>