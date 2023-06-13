<?php
// Putanja do postojeće slike koju želimo modifikovati
$putanjaSlike = 'tigar.jpg';

// Učitavanje postojeće slike
$originalnaSlika = imagecreatefromjpeg($putanjaSlike);

// Promjena veličine slike
$novaVelicina = 500; // Nova veličina slike (širina i visina)
$modificiranaSlika = imagescale($originalnaSlika, $novaVelicina);

// Rotacija slike za 90 stepeni
$rotiranaSlika = imagerotate($modificiranaSlika, 90, 0);

// Primjena filtera - u ovom slučaju, crno-bijeli filter
imagefilter($rotiranaSlika, IMG_FILTER_GRAYSCALE);

// Postavljanje zaglavlja HTTP odgovora kako bi se prikazala slika
header('Content-type: image/jpeg');

// Ispisivanje modifikovane slike na izlaz
imagejpeg($rotiranaSlika);

// Oslobađanje resursa
imagedestroy($originalnaSlika);
imagedestroy($modificiranaSlika);
imagedestroy($rotiranaSlika);
?>
