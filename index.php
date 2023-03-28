<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TuJardín</title>
    <link rel="stylesheet" href="./styles/styles.css">

</head>

<body>
    <ul class="Navbar">
        <li style="--clr:#00ade1"> 
            <a href="index.html" data-text="&nbsp;Inicio"> &nbsp;Inicio&nbsp;</a>
        </li>
        <li style="--clr:#ff6493"> 
            <a href="perfil.html" data-text="&nbsp;Perfil"> &nbsp;Perfil&nbsp;</a>
        </li>
        <li style="--clr:#ffdd1c"> 
            <a href="servicios.html" data-text="&nbsp;Servicios"> &nbsp;Servicios&nbsp;</a>
        </li>
        <li style="--clr:#00dc82"> 
            <a href="sesion.php" data-text="&nbsp;Sesion"> &nbsp;Sesion&nbsp;</a>
        </li>
        <li style="--clr:#dc00d4"> 
            <a href="contacto.html" data-text="&nbsp;Contacto"> &nbsp;Contacto&nbsp;</a>
        </li>
    </ul>
    <div class="conteudo">
        <div class="lista__cards">
            <button class="lista__cards__btn btn btn-esquerda">
                <div class="icone">
                    <svg>
                        <use xlink:href="#flexa-esquerda"></use>
                    </svg>
                </div>
            </button>

            <div class="conteudo__cards">
                <div class="card card--corrente">
                    <div class="imagem--card">
                        <img src="./img/SOL.jpg"/>
                    </div>
                </div>

                <div class="card card--proximo">
                    <div class="imagem--card">
                        <img src="./img/SOMBRA.avif" />
                    </div>
                </div>

                <div class="card card--anterior">
                    <div class="imagem--card">
                        <img src="./img/INTERIOR.jpg" />
                    </div>
                </div>
            </div>

            <button class="lista__cards__btn btn btn--direita">
                <div class="icone">
                    <svg>
                        <use xlink:href="#arrow-right"></use>
                    </svg>
                </div>
            </button>
        </div>

        <div class="listagem__informacoes">
            <div class="conteudo__informacoes">
                <div class="info informacoes__corrente">
                    <h1 class="texto nome">SOL/EXTERIOR</h1>
                    <h4 class="texto localizacao">Descrubre que plantas <br> son para sol</h4>
                    <a href="sol.html"><p class="texto descricao">Ver</p></a>
                </div>

                <div class="info informacoes__seguinte">
                    <h1 class="texto nome">SOMBRA</h1>
                    <h4 class="texto localizacao">Mira las plantas<br>para sombra</h4>
                    <a href="sombra.html"><p class="texto descricao">Ver</p></a>
                </div>

                <div class="info informacoes__anterior">
                    <h1 class="texto nome">INTERIOR</h1>
                    <h4 class="texto localizacao">Mira como cuidar<br>tus plantas del <br>interior</h4>
                    <a href="interior.html"><p class="texto descricao">Ver</p></a>
                </div>
            </div>
        </div>


        <div class="conteudo__background">
            <div class="conteudo__backgorund__imagem imagem--corrente">
                <img src="./img/fondosol.jpg" alt="" />
            </div>
            <div class="conteudo__backgorund__imagem imagem--proxima">
                <img src="./img/fondosombra.jpg" alt="" />
            </div>
            <div class="conteudo__backgorund__imagem imagem--anterior">
                <img src="./img/fondointerior.jpg" alt="" />
            </div>
        </div>
    </div>

    <div class="conteudo__carregamento">
        <div class="carregamento"></div>
    </div>


    <svg class="icones" style="display: none;">
        <symbol id="flexa-esquerda" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='328 112 184 256 328 400'
                style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
        <symbol id="arrow-right" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 512 512'>
            <polyline points='184 112 328 256 184 400'
                style='fill:none;stroke:#fff;stroke-linecap:round;stroke-linejoin:round;stroke-width:48px' />
        </symbol>
    </svg>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.3/gsap.min.js"></script>
    <script src="./script/script.js"></script>
</body>

</html>