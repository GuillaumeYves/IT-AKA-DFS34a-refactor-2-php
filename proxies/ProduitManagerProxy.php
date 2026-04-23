<?php
require_once __DIR__ . '/../managers/ProduitManager.php';

class ProduitManagerProxy {
    private $manager;

    public function __construct() {
        $this->manager = new ProduitManager();
    }

    public function ajouterProduit(Produit $produit) {
        if ($produit->getPrix() < 0) {
            echo "Erreur : Le prix ne peut pas être négatif.\n";
            return;
        }
        $this->manager->ajouterProduit($produit);
        echo "Produit ajouté : {$produit->getLibelle()} ({$produit->getPrix()} €)\n";
    }

    public function getProduit($id) {
        return $this->manager->getProduit($id);
    }
}
