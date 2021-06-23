<?php
session_start();
if(isset($_SESSION['error_connection']))
{
echo $_SESSION['error_connection'];
unset($_SESSION['error_connection']);
}
?>

<h1>Informacje do pliku config.php</h1>
<br>
<form action="krok3.php" method="post">
    <input type="text" placeholder="Host" name="host" required="">
    <br>          
    <br>
    <input type="text" placeholder="Uzytkownik" name="User" required="">
    <br>
    <br>
    <input type="password" placeholder="Hasło" name="haslo" required="">
    <br>
    <br>
            
    <input type="text" placeholder="Nazwa bazy danych" name="db" required="">
    <br>
    <br>
    <button type="submit" class="btn btn-success" name="Kontynuuj">Kontynuuj</button>
    <br>
    <hr color="black">

</form>';