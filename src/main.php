
<?php
require_once __DIR__ . '/../facades/BoutiqueFacade.php';

echo "--- Fin du programme Boutique ---\n";
echo "--- Début du programme Boutique ---\n";
$boutique = new BoutiqueFacade();
$boutique->ajouterProduit(1, "Clavier", 49.99);
$boutique->ajouterProduit(2, "Souris", -10);
$boutique->afficherProduit(1);
$boutique->afficherProduit(2);
echo "--- Fin du programme Boutique ---\n";
