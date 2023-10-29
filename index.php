<?php
// Création de deux objets DateTime
$presentTime = new DateTime(); // Date et heure actuelles
$destinationTime = new DateTime('2024-03-19 18:00:00'); // Date et heure de destination (au 31 décembre 2023 à 18:00)

// Formatage des deux dates
$formattedPresentTime = $presentTime->format('F j, Y A g:i');
$formattedDestinationTime = $destinationTime->format('F j, Y A g:i');

// Affichage des deux dates
echo "Date de départ : $formattedPresentTime<br>";
echo "Date de destination : $formattedDestinationTime<br>";

// Calcul de la différence entre les deux dates
$interval = $presentTime->diff($destinationTime);

// Affichage de l'intervalle
echo 'Intervalle de temps : ' . $interval->format('%y année(s), %m mois, %d jour(s), %h heure(s), %i minute(s)') . '<br>';

