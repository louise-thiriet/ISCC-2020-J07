<?php

$panier = array(
    ['T-shirt rouge', 15.50, 5],
    ['T-shirt vert', 15.50, 6],
    ['T-shirt argent', 15.50, 8],
    ['Short bleu', 16.50, 5],
    ['Short vert', 19.99, 5],
    ['Veste argent', 19.99, 10],
    ['Veste argent', 35, 3],
);

function afficher_panier($panier){
    foreach($panier as $produit => $valeur){
        echo '<ul>';
        echo '<li>' .$valeur[0]. '</li>';
        echo '<li>' .$valeur[1]. '</li>';
        echo '<li>' .$valeur[2]. '</li>';
        echo '</ul>';
    }
}

function calculer_total_panier($panier){
    $total=0;
    foreach ($panier as $produit => $valeur){
        $total += $total + $valeur[1] * $valeur[2];
    }
    echo "<p>Le prix total du panier est de $total euros.</p> ";
}

afficher_panier($panier);
calculer_total_panier($panier);
?>