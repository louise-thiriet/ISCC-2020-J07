<?php

$produits = array (
    'T-shirt rouge' => 15.50,
    'T-shirt vert' => 15.50,
    'T-shirt  argent' => 16.50,
    'Short bleu' => 19.99,
    'Short vert' => 19.99,
    'Veste argent' => 35,
);
function afficher_produits($produits){
    echo '<table border=\"1"\ col style="width:25%">
        <tr>
            <td>Produits</td>
            <td>Prix</td>
        </tr>
    </table>';
    foreach($produits as $produits => $prix){
    echo '<table border=\"1"\ col style="width:25%">
        <tr>
            <td>' .$produits. '</td>
            <td>' .$prix.  '</td>
        </tr>
    </table>';
    }
}
afficher_produits($produits);
?>