<?php
session_start();
session_regenerate_id();

$host = 'localhost';
$username = 'root';
$password = '';
$db = 'pomoc_kolezenska';

$con = new mysqli($host, $username, $password, $db);

if($con->connect_error)
{
    die("Connection error: ".$con->connect_error);
}

if(isset($_POST['register']))
{
    $name = $_POST['imie'];
    $surname = $_POST['nazwisko'];
    $username = $_POST['nazwa_uzytkownika'];
    $email = $_POST['email'];
    $pass = hash('sha256', $_POST['haslo']);
    $class = $_POST['klasa'];
    $prof = $_POST['kierunek'];
    $teacher = boolval($_POST['korepetytor']);
    $res = $con->query("CALL register('$username','$pass','$email','$name','$surname','$class','$prof', 0, '$teacher')");
    // if(!$res)
    // {
    //     echo $con->error;
    // }
}
if(isset($_POST['login']))
{
    $login = $_POST['nazwa_uzytkownika'];
    $pass = hash('sha256', $_POST['haslo']);

    $res = $con->query("CALL login('$username','$pass')");
    if($res)
    {
        $row = $res->fetch_assoc();
        $_SESSION['user'] = $row;
    }
}
?>