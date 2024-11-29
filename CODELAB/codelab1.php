<?php
// Function for Equilateral Triangle (CLI)
function segitiga_sama_sisi($n) {
    echo "Segitiga Sama Sisi\n";
    for ($i = 1; $i <= $n; $i++) {
        // Print spaces
        for ($j = $i; $j < $n; $j++) {
            echo " ";  // Single space for indentation
        }
        // Print stars
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n"; // New line
    }
    echo "\n"; // Extra line between triangles
}

// Function for Reverse Equilateral Triangle (CLI)
function segitiga_sama_sisi_terbalik($n) {
    echo "Segitiga Sama Sisi Terbalik\n";
    for ($i = $n; $i >= 1; $i--) {
        // Print spaces
        for ($j = $n; $j > $i; $j--) {
            echo " ";  // Single space for indentation
        }
        // Print stars
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n"; // New line
    }
}

// Main code
$n = 5; // Number of rows

// Call functions
segitiga_sama_sisi($n);
segitiga_sama_sisi_terbalik($n);

?>
