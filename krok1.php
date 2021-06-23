<?php
if(file_exists("config.php"))
{
    echo "Super! Plik config istnieje!";
    echo "<br>";
    ?>
    <br>
    <br>
    <form action='krok2.php' method='post'>
    <button type='submit' class='btn btn-success' name='kontynuuj'>Kontynuuj</button></form>
    <?php
}
else
{
    echo "Plik Config.php nie istnieje.";
    echo "<br>";
    echo "Stwórz plik config.php w folderze public_html";
}
?>