<?php

define('DB_SERVER', 'p3plzcpnl437847.prod.phx3.secureserver.net');
define('DB_USERNAME', 'cenorvac');
define('DB_PASSWORD', 'Irashma0906&&Odraude2781');
define('DB_NAME', 'aglaya'); 

$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if ($link === false){ 
    die("ERROR EN LA CONEXION" . mysqli_connect_error());   

}

?>
