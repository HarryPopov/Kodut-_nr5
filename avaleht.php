
<?php


 include("header.php")

?>

<div class="container">
<div class="row justify-content-center" style="height: 400px;">
 <div class="col-4">
    <div class="text-start">
    <h1>Hei, olen</h1>
    </div>

    <!-- Loeb failist esimest rida -->

    <?php
            //faili nimi
            $allikas = 'Tutvustus.txt';
            //faili avamine
            $minu_fail = fopen($allikas, 'r');
            //faili sisu kuvamine
            $faili_sisu = fgets($minu_fail);
            echo '<div class="text-start">';
            echo '<h1>' . $faili_sisu . '</h1>';
            echo '</div>';
            //faili sulgemine
            fclose($minu_fail);
            ?>

    <!-- Loeb failist teise rea -->        

<?php
$allikas = 'Tutvustus.txt';
$minu_fail = fopen($allikas, 'r');
$faili_sisu = fgets($minu_fail);
$faili_sisu = fgets($minu_fail);
echo '<div class="text-start text-secondary">';
echo '<h5>' . $faili_sisu . '</h5>';
echo '</div>';
fclose($minu_fail);
?>

     <!-- Loeb failist kolmanda rea -->

<?php
$allikas = 'Tutvustus.txt';
$minu_fail = fopen($allikas, 'r');
for ($i = 0; $i < 2; $i++) {
    fgets($minu_fail);
}
$faili_sisu = fgets($minu_fail);
echo '<div class="text-start text-secondary">';
echo '<h6>' . $faili_sisu . '</h6>';
echo '</div>';
fclose($minu_fail);
?>

<div class="mt-3">
  <button class="btn btn-primary btn-lg" type="button">Palka mind
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-arrow-up" viewBox="0 0 16 16">
  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v4.5a.5.5 0 0 1-1 0V5.383l-7 4.2-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h5.5a.5.5 0 0 1 0 1H2a2 2 0 0 1-2-1.99zm1 7.105 4.708-2.897L1 5.383zM1 4v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1"/>
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.354-5.354 1.25 1.25a.5.5 0 0 1-.708.708L13 12.207V14a.5.5 0 0 1-1 0v-1.717l-.28.305a.5.5 0 0 1-.737-.676l1.149-1.25a.5.5 0 0 1 .722-.016"/>
</svg>
</button>
</div>

    </div>

 <div class="col-4">

 <!-- Loeb failist pildi -->

    <?php
$pilt = file('Tutvustus.txt')[3];
echo '<div class="text-center mt-5">';
echo '<img src="' . $pilt. '" alt="Minu pilt" class="rounded-circle" width="300" height="300">';
echo '</div>';
?>

</div>
</div>

<div class="text-center">
<div class="row mt-5">
    <h3>Minust</h3>
</div>

<!-- Loeb failist viienda rea -->

<?php
$allikas = 'Tutvustus.txt';
$minu_fail = fopen($allikas, 'r');
for ($i = 0; $i < 4; $i++) {
    fgets($minu_fail);
}
$faili_sisu = fgets($minu_fail);
echo '<div class="text-center text-secondary">';
echo '<h6>' . $faili_sisu . '</h6>';
echo '</div>';
fclose($minu_fail);
?>

<div class="row justify-content-center mt-5">
 <div class="col-4">
    <div class="text-start">

    <!-- loeb failist teise pildi -->

    <?php
$pilt = file('Tutvustus.txt')[5];
echo '<div class="text-start mt-5">';
echo '<img src="' . $pilt. '" alt="Minu pilt" width="250" height="230">';
echo '</div>';
?>
    
    </div>
    </div>

    <div class="col-4">

    <!-- Loeb failist seitsmenda rea -->
    
    <?php
$allikas = 'Tutvustus.txt';
$minu_fail = fopen($allikas, 'r');
for ($i = 0; $i < 6; $i++) {
    fgets($minu_fail);
}
$faili_sisu = fgets($minu_fail);
echo '<div class="text-start text-secondary mt-5">';
echo '<h6>' . $faili_sisu . '</h6>';
echo '</div>';
fclose($minu_fail);
?>

<div class="row align-items-start mt-5">
    <div class="col">
        
      
    <!-- loeb failist kaheksanda rea -->
    <?php
$allikas = 'Tutvustus.txt';
$minu_fail = fopen($allikas, 'r');
for ($i = 0; $i < 7; $i++) {
    fgets($minu_fail);
}
$faili_sisu = fgets($minu_fail);
echo '<div class="text-center">';
echo '<h2>' . $faili_sisu . '</h2>';
echo '</div>';
fclose($minu_fail);
?>
<div class="text-secondary">
<h6>Aastat</h6>
<h6>kogemust</h6>
</div>

    </div>
    <div class="col">
   <!-- loeb failist üheksanda rea -->
   <?php
$allikas = 'Tutvustus.txt';
$minu_fail = fopen($allikas, 'r');
for ($i = 0; $i < 8; $i++) {
    fgets($minu_fail);
}
$faili_sisu = fgets($minu_fail);
echo '<div class="text-center">';
echo '<h2>' . $faili_sisu . '</h2>';
echo '</div>';
fclose($minu_fail);
?>   

<div class="text-secondary">
<h6>projekti</h6>
<h6>lõpetanud</h6>
</div>

    </div>
    <div class="col">
     <!-- loeb failist kümnenda rea -->
   <?php
$allikas = 'Tutvustus.txt';
$minu_fail = fopen($allikas, 'r');
for ($i = 0; $i < 9; $i++) {
    fgets($minu_fail);
}
$faili_sisu = fgets($minu_fail);
echo '<div class="text-center">';
echo '<h2>' . $faili_sisu . '</h2>';
echo '</div>';
fclose($minu_fail);
?>   

<div class="text-secondary">
<h6>ettevõttes</h6>
<h6>töötanud</h6>
</div>



    </div>

    
    <div class="text-start mt-3">
  <button class="btn btn-primary btn-lg" type="button">Lae alla CV
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-arrow-down" viewBox="0 0 16 16">
  <path d="M8.5 6.5a.5.5 0 0 0-1 0v3.793L6.354 9.146a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l2-2a.5.5 0 0 0-.708-.708L8.5 10.293z"/>
  <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2M9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z"/>
</svg>
</button>
</div>
  </div>

</div>


</div>

<?php


 include("footer.php")

?>
