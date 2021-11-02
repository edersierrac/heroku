
<?php
function conectar(){
    $host="dfkpczjgmpvkugnb.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user="rmykfjr3nx827wv2";
    $pass="u64c9hvm0qt12xx4";

    $bd="mhnynkr8etzq2vys";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>