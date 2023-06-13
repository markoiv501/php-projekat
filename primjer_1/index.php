<?php
// Definisanje širine i visine nove slike
$sirina = 500;
$visina = 300;

// Kreiranje nove prazne slike
$novaSlika = imagecreatetruecolor($sirina, $visina);

// Definisanje boje pozadine
$bojaPozadine = imagecolorallocate($novaSlika, 255, 0, 0); // Ovdje je postavljena crvena boja pozadine (RGB: 255, 0, 0)

// Popunjavanje pozadine sa definisanom bojom
imagefill($novaSlika, 0, 0, $bojaPozadine);

// Postavljanje zaglavlja HTTP odgovora kako bi se prikazala slika
header('Content-type: image/png');

// Ispisivanje slike kao PNG datoteke na izlaz
imagepng($novaSlika);

// Oslobađanje resursa
imagedestroy($novaSlika);
?>