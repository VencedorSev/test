<html>
<body>
<?php

$annee = 2003;
$mois = 2;
if ($annee % 100 != 0 && $annee % 4 == 0)
{
	echo "L'annee $annee est bissextile. <br/>";
	$bissextile = true;
}
else if ($annee % 100 == 0 && ($annee / 100) % 4 == 0)
{	
	echo "L'annee $annee est bissextile. <br/>";
	$bissextile = true;
}
else
{
	echo "L'annee $annee n'est pas bissextile. <br/>";
	$bissextile = false;
}

/*
NombreJoursMois(3, 2012) calcule le nombre de jours pour le mois de mars 2012.
a) Les mois 1, 3, 5, 7, 8, 10 et 12 ont tous 31 jours.
b) Les mois 4, 6, 9 et 11 ont tous 30 jours.
c) Le mois 2 compte 29 jours si l’année est bissextile, et 28 sinon!
*/
 
if ($mois == 4 || $mois == 6 || $mois == 9 || $mois == 11)
	echo "Le nombre de jours dans $annee dans le mois de $mois est 30. <br/>";
else if ($mois == 2 && $bissextile == true)
	echo "Le nombre de jours dans $annee dans le mois de $mois est 29. <br/>";
else if  ($mois == 2 && $bissextile == false)
	echo "Le nombre de jours  dans $annee dans le mois de $mois est 28. <br/>";
else 
	echo "Le nombre de jours dans $annee dans le mois de $mois est 31. <br/>";

echo 'Les nouveaux modif!';

?>
</html>
</body>