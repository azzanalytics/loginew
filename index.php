<?php

require "code-login.php";

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="nonauthor">
    <meta name="keywords" content="SARS-Cov-2, covid, covid-19, covid puebla, covid-19 puebla, dra marion pearl, covid dra marion pearl">
    <meta name="description" content="Somos un grupo médico que se dedica al tratamiento de pacientes con COVID-19, mediante el uso exitoso de la ciencia aplicada a la médicina.">
    <link rel="icon" href="imagen/logo.ico">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <meta name="copyright" content="medicov">
    <title>MedicoV | Expertos en COVID </title>
    <!-------------estilos------------------------>
    <link rel="stylesheet" href="css/styles.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


</head>

<body>
<div class="container-all">
    <div class="ctn-form">
        <img src="imagen/logo.jpg" alt="" class="logo">
        <h1 class="title">Iniciar Sesión</h1>
        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            
            <label for="">Email</label>
            <input type="text" name="email">
            <span class="msg-error"><?php echo $email_err; ?></span>
            
            <label for="">Contraseña</label>
            <input type="password" name="password">
            <span class="msg-error"><?php echo $password_err; ?></span>
            
            <input type="submit" value="Iniciar">
        </form>
        <span class="text-footer">¿Aún no te has registrado?
        <a href="register.php">  Registrate</a>
        </span>


    </div>
<div class="ctn-text">
    <div class="capa"></div>
  <h1 class="title-description">Lorem ipsum dolor sit amet.</h1>
  <p class="text-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, non, impedit, cupiditate quod officia sint vitae ducimus minus aliquid asperiores ad? Culpa impedit deleniti, facilis cumque illum modi nihil tempora.</p>
  
</div>

</div>

</body>
</html>    
