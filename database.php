<? 

$server = 'p3plzcpnl4378.prod.phx3.secureserver.net';
$username = 'cenorvac';
$password = 'Irashma0906&&Odraude2781';
$database = 'Aglaya';

try {
   $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password); 
} catch (PDOException $e){
    die('connected failed:'.$e->getMessage());
}


?>