<?php 
// odbieramy dane z formularza 
$imie = $_POST['imie']; 
$nazwisko = $_POST['nazwisko']; 
$P1= $_POST['P1'];
$P2= $_POST['P2'];
$P3= $_POST['P3'];
$P4= $_POST['P4'];
$P5= $_POST['P5'];
$P6= $_POST['P6'];
$P7= $_POST['P7'];
$P8= $_POST['P8'];
$P9= $_POST['P9'];
$P10= $_POST['P10'];


if($imie and $nazwisko) { 
     
    $connection = @mysql_connect('localhost', 'root', '') 
    or die('Brak połączenia z serwerem MySQL'); 
    $db = @mysql_select_db('ankieta', $connection) 
    or die('Nie mogę połączyć się z bazą danych'); 
      
    $ins = @mysql_query("INSERT INTO ankieta SET imie='$imie', nazwisko='$nazwisko',P1='$P1',P2='$P2',P3='$P3',P4='$P4',P5='$P5',P6='$P6',P7='$P7',P8='$P8',P9='$P9',P10='$P10'"); 
     
    if($ins) echo "Rekord został dodany poprawnie"; 
    else echo "Błąd nie udało się dodać nowego rekordu"; 
     
    mysql_close($connection); 
} 

?>