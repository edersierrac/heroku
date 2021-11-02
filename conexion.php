<<<<<<< HEAD
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
=======
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
>>>>>>> a0c1abf3a800fcd95def05be6aabd800f5dc54e4
