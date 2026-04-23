<?php
require_once __DIR__ . '/../proxies/ProduitManagerProxy.php';
require_once __DIR__ . '/../entities/product/Produit.php';

class BoutiqueFacade {
    private $produitManager;

    public function __construct() {
        $this->produitManager = new ProduitManagerProxy();
    }

    public function ajouterProduit($id, $libelle, $prix) {
        $produit = new Produit($id, $libelle, $prix);
        $this->produitManager->ajouterProduit($produit);
    }

    public function afficherProduit($id) {
        $produit = $this->produitManager->getProduit($id);
        if ($produit) {
            echo "Produit : {$produit->getLibelle()} - {$produit->getPrix()} €\n";
        } else {
            echo "Produit introuvable (id: $id)\n";
        }
    }
}
