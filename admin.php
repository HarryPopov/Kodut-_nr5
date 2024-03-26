<?php


 include("header.php")


?>

<?php

// Loe esimene rida
function Loeesimenerida($Tutvustus) {
    $rida0 = file_get_contents($Tutvustus);
    $rida0 = explode("\n", $rida0);
    return $rida0[0];
}

// Loe teine rida
function Loeteinerida($Tutvustus) {
    $rida1 = file_get_contents($Tutvustus);
    $rida1 = explode("\n", $rida1);
    return $rida1[1];
}

// Loe kolmas rida
function Loekolmasrida($Tutvustus) {
    $rida2 = file_get_contents($Tutvustus);
    $rida2 = explode("\n", $rida2);
    return $rida2[2];
}

// Loe viies rida
function Loeviiesrida($Tutvustus) {
    $rida4 = file_get_contents($Tutvustus);
    $rida4 = explode("\n", $rida4);
    return $rida4[4];
}

// Loe esimene rida
function Loeseitsmesrida($Tutvustus) {
    $rida6 = file_get_contents($Tutvustus);
    $rida6 = explode("\n", $rida6);
    return $rida6[6];
}

// Loe kaheksas rida
function Loekaheksasrida($Tutvustus) {
    $rida7 = file_get_contents($Tutvustus);
    $rida7 = explode("\n", $rida7);
    return $rida7[7];
}

// Loe üheksas rida
function Loeyheksasrida($Tutvustus) {
    $rida8 = file_get_contents($Tutvustus);
    $rida8 = explode("\n", $rida8);
    return $rida8[8];
}

// Loe kümmnes rida
function Loekymmnesrida($Tutvustus) {
    $rida9 = file_get_contents($Tutvustus);
    $rida9 = explode("\n", $rida9);
    return $rida9[9];
}

// Muuda esimene rida
function Muudaesimenerida($Tutvustus, $esimenerida) {
    $rida0 = file_get_contents($Tutvustus);
    $rida0 = explode("\n", $rida0);
    $rida0[0] = $esimenerida;
    file_put_contents($Tutvustus, implode("\n", $rida0));
}

// Muuda teine rida
function Muudateinerida($Tutvustus, $teinerida) {
    $rida1 = file_get_contents($Tutvustus);
    $rida1 = explode("\n", $rida1);
    $rida1[1] = $teinerida;
    file_put_contents($Tutvustus, implode("\n", $rida1));
}

// Muuda kolmas rida
function Muudakolmasrida($Tutvustus, $kolmasrida) {
    $rida2 = file_get_contents($Tutvustus);
    $rida2 = explode("\n", $rida2);
    $rida2[2] = $kolmasrida;
    file_put_contents($Tutvustus, implode("\n", $rida2));
}

// Muuda viies rida
function Muudaviiesrida($Tutvustus, $viiesrida) {
    $rida4 = file_get_contents($Tutvustus);
    $rida4 = explode("\n", $rida4);
    $rida4[4] = $viiesrida;
    file_put_contents($Tutvustus, implode("\n", $rida4));
}

// Muuda seitsmes rida
function Muudaseitsmesrida($Tutvustus, $seitsmesrida) {
    $rida6 = file_get_contents($Tutvustus);
    $rida6 = explode("\n", $rida6);
    $rida6[6] = $seitsmesrida;
    file_put_contents($Tutvustus, implode("\n", $rida6));
}

// Muuda kaheksas rida
function Muudakaheksasrida($Tutvustus, $kaheksasrida) {
    $rida7 = file_get_contents($Tutvustus);
    $rida7 = explode("\n", $rida7);
    $rida7[7] = $kaheksasrida;
    file_put_contents($Tutvustus, implode("\n", $rida7));
}

// Muuda yheksas rida
function Muudayheksasrida($Tutvustus, $yheksasrida) {
    $rida8 = file_get_contents($Tutvustus);
    $rida8 = explode("\n", $rida8);
    $rida8[8] = $yheksasrida;
    file_put_contents($Tutvustus, implode("\n", $rida8));
}

// Muuda kymmnes rida
function Muudakymmnesrida($Tutvustus, $kymmnesrida) {
    $rida9 = file_get_contents($Tutvustus);
    $rida9 = explode("\n", $rida9);
    $rida9[9] = $kymmnesrida;
    file_put_contents($Tutvustus, implode("\n", $rida9));
}

// Fail mida loetakse ja muudetakse
$Tutvustus = "Tutvustus.txt";

// Esitamine
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['#'])) {
    $esimenerida = Loeesimenerida($Tutvustus);
    $teinerida = Loeteinerida($Tutvustus);
    $kolmasrida = Loekolmasrida($Tutvustus);
    $viiesrida = Loeviiesrida($Tutvustus);
    $seitsmesrida = Loeseitsmesrida($Tutvustus);
    $kaheksasrida = Loekaheksasrida($Tutvustus);
    $yheksasrida = Loeyheksasrida($Tutvustus);
    $kymmnesrida = Loekymmnesrida($Tutvustus);

    // Kuvatud muudatused
    echo "<h2>Hei, olen (nimi)</h2>";
    echo "<form method='GET'>";
    echo "<input type='text' name='esimene_rida' value='$esimenerida'><br>";
    echo "<h2>Amet (näiteks: Veebiarendaja, programeerija)</h2>";
    echo "<input type='text' name='teine_rida' value='$teinerida'><br>";
    echo "<h2>Enesetutvustus (näiteks: looder ipsum)</h2>";
    echo "<input type='text' name='kolmas_rida' value='$kolmasrida'><br>";
    echo "<h2>Minust (näiteks: saavutused, teadmised, eesmärgid)</h2>";
    echo "<input type='text' name='viies_rida' value='$viiesrida'><br>";
    echo "<h2>Saavutused/teadmised/eesmärgid (näiteks: Olen loonud bootstrapiga kvaliteeti.)</h2>";
    echo "<input type='text' name='seitsmes_rida' value='$seitsmesrida'><br>";
    echo "<h2>Aastat kogemust</h2>";
    echo "<input type='number' name='kaheksas_rida' value='$kaheksasrida'><br>";
    echo "<h2>Projekti lõpetanud</h2>";
    echo "<input type='number' name='yheksas_rida' value='$yheksasrida'><br>";
    echo "<h2>Ettevõttes töötanud</h2>";
    echo "<input type='number' name='kymmnes_rida' value='$kymmnesrida'><br>";
    echo "<input type='submit' name='save_changes' value='Salvesta muudatused'>";
    echo "</form>";
}

// Muudatuste salvestamine
elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['save_changes'])) {
    $esimenerida = $_GET['esimene_rida'];
    $teinerida = $_GET['teine_rida'];
    $kolmasrida = $_GET['kolmas_rida'];
    $viiesrida = $_GET['viies_rida'];
    $seitsmesrida = $_GET['seitsmes_rida'];
    $kaheksasrida = $_GET['kaheksas_rida'];
    $yheksasrida = $_GET['yheksas_rida'];
    $kymmnesrida = $_GET['kymmnes_rida'];

    Muudaesimenerida($Tutvustus, $esimenerida);
    Muudateinerida($Tutvustus, $teinerida);
    Muudakolmasrida($Tutvustus, $kolmasrida);
    Muudaviiesrida($Tutvustus, $viiesrida);
    Muudaseitsmesrida($Tutvustus, $seitsmesrida);
    Muudakaheksasrida($Tutvustus, $kaheksasrida);
    Muudayheksasrida($Tutvustus, $yheksasrida);
    Muudakymmnesrida($Tutvustus, $kymmnesrida);

    echo "<h2>Muudatused on salvestatud!</h2>";
}
// Kui esmakordselt lehele tullakse
else {
    echo "<div class='container' style='height: 550px';>";
    echo "<div class='text-center'>";
    echo "<h2>Sisene Admin lehele</h2>";
    echo "<form method='GET'>";
    echo "<input type='submit' name='#' value='SISENE'>";
    echo "</form>";
    echo "</div>";
}
?>






</div>




<?php


 include("footer.php")

?>