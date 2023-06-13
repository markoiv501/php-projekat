<?php
// Putanje do slika koje želimo kombinovati
$slika1 = 'kamila.jpg';
$slika2 = 'tigar.jpg';

// Učitavanje slika
$slikaObjekat1 = imagecreatefromjpeg($slika1);
$slikaObjekat2 = imagecreatefromjpeg($slika2);

// Dimenzije prve slike
$sirina1 = imagesx($slikaObjekat1);
$visina1 = imagesy($slikaObjekat1);

// Dimenzije druge slike
$sirina2 = imagesx($slikaObjekat2);
$visina2 = imagesy($slikaObjekat2);

// Kreiranje nove prazne slike za kolaž
$kolaz = imagecreatetruecolor($sirina1 + $sirina2, max($visina1, $visina2));

// Kopiranje prve slike na kolaž
imagecopy($kolaz, $slikaObjekat1, 0, 0, 0, 0, $sirina1, $visina1);

// Kopiranje druge slike na kolaž
imagecopy($kolaz, $slikaObjekat2, $sirina1, 0, 0, 0, $sirina2, $visina2);

// Postavljanje zaglavlja HTTP odgovora kako bi se prikazao kolaž
header('Content-type: image/jpeg');

// Ispisivanje kolaža na izlaz
imagejpeg($kolaz);

// Oslobađanje resursa
imagedestroy($slikaObjekat1);
imagedestroy($slikaObjekat2);
imagedestroy($kolaz);
?>