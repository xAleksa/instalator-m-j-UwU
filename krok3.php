<?php
session_start();
$host = $_POST['host'];
$user = $_POST['User'];
$haslo =$_POST['haslo'];
$db = $_POST['db'];
        
$connection=mysqli_connect($host, $user,$haslo);
$db=mysqli_select_db($connection, $user);

if(!$connection or !$db)
{
    header("Location:Step2.php");
    $_SESSION['error_connection'] = '<script language="javascript">alert("Nie udało się połączyć z bazą danych!")</script>';
}
else
{
    $uchwyt = fopen("config.php", "w");  
    fwrite($uchwyt,
                      
    "<?php"."\n"
    .'$host='."'".$_POST['host']."'".';'."\n"
    .'$db_user='."'".$_POST['db_user']."'".';'."\n"
    .'$db_password='."'".$_POST['db_haslo']."'".';'."\n"
    .'$db_name='."'".$_POST['db_name']."'".';'."\n"
                      
    .'$connect = mysqli_connect($host, $db_user, $db_password, $db_name);'."\n"

    .'?>'."\n"
    );
    fclose($uchwyt);
      
      
    $_SESSION['success_config'] = '<script language="javascript">alert("config.php uzupełniony")</script>';
    header("Location:Step4.php");                                    
}            
?>