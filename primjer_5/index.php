<?php

echo "<h3> PNG SLIKE </h3>";

// Pronalazi sve PNG slike u trenutnom direktoriju
foreach (glob("*.png") as $filename) {
    echo "<p>$filename</p>"; // Ispisuje naziv slike
    echo "<img src='$filename' alt='$filename'/><br><br>"; // Prikazuje sliku
}

echo "<h3> JPG SLIKE </h3>";

// Pronalazi sve JPG slike u trenutnom direktoriju
foreach (glob("*.jpg") as $filename) {
    echo "<p>$filename</p>"; // Ispisuje naziv slike
    echo "<img src='$filename' alt='$filename'/><br><br>"; // Prikazuje sliku
}

echo "<h3>WEBP SLIKE</h3>";

// Pronalazi sve WEBP slike u trenutnom direktoriju
foreach (glob("*.webp") as $filename) {
    echo "<p>$filename</p>"; // Ispisuje naziv slike
    echo "<img src='$filename' alt='$filename'/><br><br>"; // Prikazuje sliku
}

?>



