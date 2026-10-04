<?php
echo "Aimez-vous l'informatique ?";
$reponse = readline("Entrez votre réponse (oui/non) : ");
for (; ;) {
    if ($reponse === "oui" || $reponse === "non") {
        break;
    }
    echo "Réponse invalide. Veuillez répondre par 'oui' ou 'non'.\n";
    $reponse = readline("Entrez votre réponse (oui/non) : ");
}
echo "Votre réponse est : $reponse\n";
?>