<?php

## PHP - Les dates
## Pour tous les exercices, vous pouvez utiliser le site http://php.net
## N'hesitez pas à faire des pages avec du HTML/CSS

## Exercice 1 Afficher la date courante en respectant la forme jj/mm/aaaa (ex : 16/05/2016)
$date = date('d / m / Y');
echo $date;
echo "<br><br>";

## Exercice 2 Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)
$date2 = date('d / m / y');
echo $date2;
echo "<br><br>";

## Exercice 3 Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)
## Bonus : Le faire en français.
date_default_timezone_set('Europe/Paris');
$date3 = date('D / M / Y');
echo $date3;
echo "<br><br>";

## Exercice 4 Afficher le timestamp du jour.
## Afficher le timestamp du mardi 2 août 2016 à 15h00.
$time = strtotime('2016/08/2 15:00:00');
echo $time;
echo "<br><br>";

##Exercice 5 Afficher le nombre de jours qui séparent la date du jour avec le 16 mai 2016.
$dateToday = new DateTime("12-01-2021");
$datePast = new DateTime("16-05-2016");

$interval = $dateToday -> diff($datePast);
 echo $interval-> format ('%d jours, %m mois, %y années' );;
echo "<br><br>";

##Exercice 6 Afficher le nombre de jours d,ans le mois de février de l'année 2016.
$nombreDeJours = date('t', mktime(0,0,0 , 2, 1, 2016 ));
echo $nombreDeJours;
echo "<br><br>";

##Exercice 7 Afficher la date du jour + 20 jours.
$date = date("d-m-Y", strtotime("+20 days"));
echo $date;
echo "<br><br>";

##Exercice 8 Afficher la date du jour - 22 jours
$date = date("d-m-Y", strtotime("-22 days"));
echo $date;
echo "<br><br>";


## TP Faire un formulaire avec deux listes déroulantes.
## La première sert à choisir le mois, et le deuxième permet d'avoir l'année.
# MEGA BONUS ( surligné et caractère gras :-)  ) : En fonction des choix, afficher un calendrier ( voir libs JS ou autres )

?>
<select name="option" id="select">
    <?php
        $month = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12];
        for ($i = 0; $i < 12; $i++){
            echo "<option>$month[$i]</option>";
        }

    ?>
</select>

<select name="a" id="nnée">
    <?php
    $years = [2019, 2019, 2020, 2021, 2022];
    for ($i = 0; $i < 5; $i++){
        echo "<option>$years[$i]</option>";
    }
    ?>
</select>