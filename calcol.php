
<?php
// CODE POUR RECUPERER LES DONNEES DU FORMULAIRE
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $math = $_POST['select'];

    function calculate($n1, $n2, $math) {
        if ($math == "+") {
            return $n1 + $n2;
        }
        if ($math == "-") {
            return $n1 - $n2;
        }
        if ($math == "*") {
            return $n1 * $n2;
        }
        if ($math == "/") {
            return $n2 != 0 ? $n1 / $n2 : "Erreur: division par zéro";
        }
        if ($math == "%") {
            return $n2 != 0 ? $n1 % $n2 : "Erreur: modulo par zéro";
        }
    }

    $RESULT = calculate($n1, $n2, $math);
    echo "<h2>Résultat: $RESULT</h2>";
}
?>
