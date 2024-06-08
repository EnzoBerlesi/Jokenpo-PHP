<?php
function jokenpo($jogador1, $jogador2) {
    if ($jogador1 == $jogador2) {
        return "Empate!";
    } elseif (($jogador1 == "Pedra" && $jogador2 == "Tesoura") || 
              ($jogador1 == "Tesoura" && $jogador2 == "Papel") || 
              ($jogador1 == "Papel" && $jogador2 == "Pedra")) {
        return "Jogador 1 vence!";
    } else {
        return "Jogador 2 vence!";
    }
}

if (isset($_POST['jogador1']) && isset($_POST['jogador2'])) {
    $jogador1 = $_POST['jogador1'];
    $jogador2 = $_POST['jogador2'];
    echo jokenpo($jogador1, $jogador2);
}
?>
