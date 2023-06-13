<?php

// Putanja do ogromne slike koju želimo smanjiti
$putanjaOgromneSlike = 'lav_3944×2585.jpg';

// Dimenzije nove slike
$novaSirina = 500;
$novaVisina = 300;

// Učitavanje ogromne slike
$originalnaSlika = imagecreatefromjpeg($putanjaOgromneSlike);

// Dobijanje dimenzija originalne slike
$originalnaSirina = imagesx($originalnaSlika);
$originalnaVisina = imagesy($originalnaSlika);

// Stvaranje prazne slike nove veličine
$novaSlika = imagecreatetruecolor($novaSirina, $novaVisina);

// Promjena veličine slike
imagecopyresampled($novaSlika, $originalnaSlika, 0, 0, 0, 0, $novaSirina, $novaVisina, $originalnaSirina, $originalnaVisina);

// Postavljanje zaglavlja HTTP odgovora kako bi se prikazala nova slika
header('Content-type: image/jpeg');

// Ispisivanje nove slike na izlaz
imagejpeg($novaSlika);

// Oslobađanje resursa
imagedestroy($originalnaSlika);
imagedestroy($novaSlika);
?>
