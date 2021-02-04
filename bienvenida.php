<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="nonauthor">
    <meta name="keywords" content="|SARS-Cov-2, covid, covid-19, covid puebla, covid-19 puebla, dra marion pearl, covid dra marion pearl">
    <meta name="description" content="| Es un grupo médico que se dedica al tratamiento médico de pacientes COVID-19, mediante el uso de la ciencia aplicada a la médicina con un alto indice de eficacia.">
    <link rel="icon" href="img/logo.ico">
    <link rel="stylesheet" href="bienvenida.css">
    <title>MedicoV</title>
</head>

<body>
    <header class="bg-gradient">
        <div class="grid">
            <nav>
                <a href="#"><img class="img-logo" src="./img/logo.png"></a>
            </nav>
        </div>
    </header>
    <section class="section-first">
        <div class="curtain bg-gradient"></div>
        <div class="grid">
            <div class="wrapper wrapper-first">
                <div class="text-container">
                    <h1>¡Bienvenido a medicoV!</h1>
                    <h4 class="sub-heading">Atencion médica personalizada</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus eos amet recusandae in vel.
                    </p>
                    <button class="btn-basic">Saber más</button>
                </div>
                <div class="img-container img-container-one">
                </div>
            </div>
        </div>
    </section>
    <section class="section-second">
        <div class="grid">
            <div class="wrapper wrapper-second">
                <img src="./img/section-second/icon-1.png" class="icons-section-second">
                <img src="./img/section-second/icon-2.png" class="icons-section-second">
                <img src="./img/section-second/icon-3.png" class="icons-section-second">
                <img src="./img/section-second/icon-4.png" class="icons-section-second">
            </div>
        </div>
    </section>
    <section class="section-third">
        <div class="curtain curtain-reverse bg-gradient "></div>
        <div class="grid">
            <div class="wrapper wrapper-first">
                <div class="img-container img-container-two"></div>
                <div class="text-container-two">
                    <h1>Ciencia & Médicina</h1>
                    <h4 class="sub-heading">Aplicamos lo ultimo en ciencia a tu tratamiento</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus eos amet recusandae in vel.
                    </p>
                    <!---------------SEGUNDO BOTON. PARA DIRECCIONAR AGREGAR:  onclick="window.location.href='#'" DESPUES DE CLASS Y CERRAR-->
                    <button class="btn-basic">Saber más</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section-fourth bg-gradient">
        <div class="grid">
            <div class="wrapper wrapper-second">
                <img src="./img/section-fourth/icon-1.png" class="icons-section-second">
                <img src="./img/section-fourth//icon-2.png" class="icons-section-second">
                <img src="./img/section-fourth//icon-3.png" class="icons-section-second">
                <img src="./img/section-fourth//icon-4.png" class="icons-section-second">
            </div>
        </div>
    </section>
    <section class="section-fifth">
        <div class="grid">
            <div class="wrapper wrapper-first">
                <div class="box">
                    <img src="./img/section-fifth/icon-1.png">
                    <div>
                        <div class="price-container">
                            <p>Monitorización</p>
                            <p class="price-tag">24 Hrs.</p>
                        </div>
                        <div class="price-container">
                            <p>Asistente IA</p>
                            <p class="price-tag">24 Hrs.</p>
                        </div>
                        <div class="price-container">
                            <p>Urgencias</p>
                            <p class="price-tag">24 Hrs.</p>
                        </div>
                    </div>
                    <p class="box-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, pariatur. A
                        accusamus eum
                        consectetur possimus.</p>
                    <!---------------TERCER BOTON. PARA DIRECCIONAR AGREGAR:  onclick="window.location.href='#'" DESPUES DE CLASS Y CERRAR-->
                    <button class="btn-basic">Saber más</button>
                </div>
                <div class="box">
                    <img src="./img/section-fifth/icon-2.png">
                    <div>
                        <div class="price-container">
                            <p>Laboratorios</p>
                            <p class="price-tag">Agenda</p>
                        </div>
                        <div class="price-container">
                            <p>Consulta</p>
                            <p class="price-tag">Agenda</p>
                        </div>
                        <div class="price-container">
                            <p>Revisión</p>
                            <p class="price-tag">Agenda</p>
                        </div>
                    </div>
                    <p class="box-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, pariatur. A
                        accusamus eum
                        consectetur possimus.
                        <!---------------CUARTO BOTON. PARA DIRECCIONAR AGREGAR:  onclick="window.location.href='#'" DESPUES DE CLASS Y CERRAR-->
                        <button class="btn-basic">Saber más</button>
                </div>
                <div class="box">
                    <img src="./img/section-fifth/icon-3.png">
                    <div>
                        <div class="price-container">
                            <p>Exclusividad</p>
                            <p class="price-tag">100%</p>
                        </div>
                        <div class="price-container">
                            <p>Evolución</p>
                            <p class="price-tag">24 Hrs.</p>
                        </div>
                        <div class="price-container">
                            <p>Otros pacientes</p>
                            <p class="price-tag">24 Hrs.</p>
                        </div>
                    </div>
                    <p class="box-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque, pariatur. A
                        accusamus eum
                        consectetur possimus.</p>
                    <button class="btn-basic">Saber más</button>
                </div>
            </div>
        </div>
    </section>
    <section class="section-sixth bg-gradient">
        <div class="grid">
            <div class="wrapper wrapper-sixth">
                <div class="text-container">
                    <h2>Buscador</h2>
                    <h4 class="sub-heading">Publicaciones Médicas</h4>
                </div>
                <form action="#" id="newsletter-form">
                    <input type="text" name="" id="newsletter-input" placeholder="Ingrese su busqueda...">
                    <button class="btn-basic btn-newsletter">Buscar</button>
                </form>
            </div>
        </div>
    </section>
    <footer>
        <div class="grid">
            <div class="wrapper wrapper-first">
                <div class="footer-logo-box">
                    <a href="#"><img class="img-logo" src="./img/logo-blue.png"></a>
                </div>
                <div class="footer-rrss-box">
                    <div class="legal-links-box">
                        <a href="#" class="legal-link-text">Copyright</a>
                        <a href="#" class="legal-link-text">Politica de privacidad</a>
                        <a href="#" class="legal-link-text">Terminos y condiciones</a>
                    </div>
                    <div class="rrss-box">
                        <a href="https://youtu.be/HoKylasxMDc" class="rrss-link" target="_blank"><img src="./img/footer/youtube-icon.png"></a>
                        <a href="#" class="rrss-link"><img src="./img/footer/facebook-icon.png"></a>
                        <a href="#" class="rrss-link"><img src="./img/footer/instagram-icon.png"></a>
                        <a href="#" class="rrss-link"><img src="./img/footer/twitter-icon.png"></a>
                    </div>
                    <button class="cerrar-sesion" onclick="window.location.href='cerrar-sesion.php'">Cerrar sesión</button>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
