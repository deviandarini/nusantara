<?php
$Awal = $_POST['aa'];
$Akhir = $_POST['ak'];
$tampil = $_POST['tampil'];
if ($tampil == 'ganjil') 
{
    for($a=$Awal; $a<=$Akhir; $a++)
     {
     if ($a%2==1)
         echo ("$a ");
     }
}else {
    if ($tampil == 'genap') {
        for($a=$Awal; $a<=$Akhir; $a++)
     {
     if ($a%2==0)
         echo ("$a ");
     }
    }
}
?>