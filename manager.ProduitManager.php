<?php
require_once __DIR__ . '/../entities/product/Produit.php';

class ProduitManager {
    private $produits = [];

    public function ajouterProduit(Produit $produit) {
        $this->produits[$produit->getId()] = $produit;
    }

    public function getProduit($id) {
        return isset($this->produits[$id]) ? $this->produits[$id] : null;
    }
}
