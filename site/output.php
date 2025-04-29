<?php
echo "<h2>Părerile clienților noștri</h2>";
$file = "date.txt";

if (file_exists($file) && filesize($file) > 0) {
    $lines = file($file);
    foreach ($lines as $index => $line) {
        $color = ($index % 2 == 0) ? "yellow" : "pink";
        echo "<div style='background-color:$color; padding:10px; margin:5px;'>$line</div>";
    }
} else {
    echo "<p>Nu există păreri încă.</p>";
}
?>
