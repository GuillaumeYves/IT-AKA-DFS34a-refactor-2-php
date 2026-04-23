# Gestion de produits PHP — Patterns Façade & Proxy

## Objectif

Ce projet illustre la refactorisation d’un module de gestion de produits en PHP en appliquant les patterns de structure avancés :

- **Façade** : simplifie l’utilisation du système via une interface unique (`BoutiqueFacade`).
- **Proxy** : contrôle l’accès à l’ajout de produits (ex : prix négatif interdit).

La gestion des produits se fait **en mémoire** (pas de base de données, pas de .env).

## Structure du projet

```
entities/
  product/
    Produit.php
facades/
  BoutiqueFacade.php
proxies/
  ProduitManagerProxy.php
managers/
  ProduitManager.php
src/
  main.php
README.md
```

## Utilisation

1. Lancez le point d’entrée :

   ```bash
   php src/main.php
   ```
2. Le script va :

   - Créer une instance de la façade
   - Ajouter un produit valide (Clavier, 49.99 €)
   - Tenter d’ajouter un produit à prix négatif (bloqué par le proxy)
   - Afficher les produits (le second n’existe pas)

## Exemple de code (main.php)

```php
require_once __DIR__ . '/../facades/BoutiqueFacade.php';

$boutique = new BoutiqueFacade();
$boutique->ajouterProduit(1, "Clavier", 49.99);
$boutique->ajouterProduit(2, "Souris", -10);
$boutique->afficherProduit(1);
$boutique->afficherProduit(2);
```

## Notes

- **Aucune base de données n’est utilisée** : tout est stocké en mémoire.

## Avantages du refactor

- Connexion réutilisable et centralisée
- Ajout de nouveaux types de produits facile
- Code plus lisible, modulaire et évolutif
- Sécurité des accès base (fichiers d'env non versionnés)

## Exemple d'appel

```php
$product = ProductFactory::create("simple", "Livre", 20);
InsertProduct::execute($product);
```
