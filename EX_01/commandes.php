<?php

$historique_commandes=array(5.49, 9.99, 5.49, 15.99, 25);

function afficher_commandes($historique_commandes){
    foreach($historique_commandes as $element){
        echo "<br>Une commande de ";
        echo $element;
        echo " euros a été reçue.</br>";
    }
    echo "<br>Le total des commandes est de ".array_sum($historique_commandes);
    echo " euros.</br>";
}

afficher_commandes($historique_commandes);
?>