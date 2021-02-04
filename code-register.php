<?php

//Incluir archivo de conexion a la base de datos
require_once "conexion.php";
// definir variables e inicializar con valores vacios
$username = $email = $password = "";
$username_err = $email_err = $password_err ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    //VALIDANDO INPUT DE USUARIO

    if(empty(trim($_POST["username"])))
    {
    $username_err = "Por favor ingrese un nombre de usuario";
    }
    else
    {
        //Prepara una declaración de seleccion
        $sql = "SELECT id FROM usuarios WHERE usuario = ?";
     
        if($stmt = mysqli_prepare($link, $sql))
        {
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = trim($_POST["username"]);

             if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                { //EL STMT RECORRE FILA POR FILA PARA VER SI EXISTE
    
                $username_err = "Este nombre de usuario ya se encuentra registrado";
                }
                else
                {
                $username = trim($_POST["username"]);
                } //DE LO CONTRARIO LA VARIABLE USERNAME SERA IGUAL A LO QUE ESTA ESCRITO EN EL INPUT USERNAME DE REGISTER.PHP
            }
            else
            {
            echo "¡Ups! Inténtalo más tarde...";
            }
        }
    }
// VALIDANDO INPUT DE EMAIL

    if(empty(trim($_POST["email"])))
    {
    $email_err = "Por favor ingrese su e-mail";
    }
    else
    {
        //Prepara una declaración de seleccion
        $sql = "SELECT id FROM usuarios WHERE email = ?";
        if($stmt = mysqli_prepare($link, $sql))
        {
        mysqli_stmt_bind_param($stmt, "s", $param_email);

         $param_email = trim($_POST["email"]);

            if(mysqli_stmt_execute($stmt))
            {
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                $email_err = "Este e-mail ya se encuentra en uso";
                }
                else
                {
                    $email = trim($_POST["email"]); 
                    //variable email valora de inicio email
                }
            }
            else
            {
                echo  "¡Ups! Inténtalo más tarde...";
            }
        }
    }

    //VALIDANDO INPUT DE CONTRASEÑA. 
    if(empty(trim($_POST["password"])))
    {
    $password_err = "Por favor ingrese una contraseña";
    }
    elseif(strlen(trim($_POST["password"])) < 6 )
    {
    $password_err = "la contraseña debe contener al menos seis caracteres";
    }
    else
    {
    $password = trim($_POST["password"]);
        //DE LO CONTRARIO, LA variable password valora de inicio password de imput en ARCHIVO register.php
    }

    //COMPROBANDO LOS ERRORES DE ENTRADA ANTES DE INSERTAR LOS DATOS EN LA BASE DE DATOS
    if(empty($username_err) && empty($email_err) && empty($password_err))
    {
    $sql = "INSERT INTO usuarios (usuario, email, clave) VALUES (?, ?, ?)";
         // INSERTA DENTRO DE LA TABLA LLAMADA USUARIOS: "USUARIO", "EMAIL" Y "CLAVE" (QUE SON COLUMNAS DE LA TABLA QUE SE CREO EN MYSQL)
        if($stmt = mysqli_prepare($link, $sql))
        {
        mysqli_stmt_bind_param($stmt, "sss", $param_username, $param_email, $param_password);

            // ESTABLECIENDO PARAMETROS
            $param_username = $username;
            $param_email = $email;
            $param_password = password_hash($password, PASSWORD_DEFAULT); //ENCRIPTANDO CONTRASEÑA

            if(mysqli_stmt_execute($stmt))
            {
            header("location: index.php");
            }
            else
            {
            echo "Algo salió mal, intentelo más tarde";
            }
        }
    }
    mysqli_close($link);
} 

?>
