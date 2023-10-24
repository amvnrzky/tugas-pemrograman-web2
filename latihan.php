<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" contect="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Segitiga Siku-siku Huruf dan Kotak</title>
</head>
<body>
    <div class= "container">
        <h1>Segitiga Siku-siku Huruf dan Kotak</h1>
        <div class= "triangle">
            <?php
            $tinggiSegitiga = 3;

            for ($i = 1; $i <= $tinggiSegitiga; $i++) {
                $kodeAscii = 65;

                for ($j = 1; $j <= $i; $j++) {
                    $huruf = chr($kodeAscii);

                    echo "<div class='box'>$huruf</div>";

                    $kodeAscii++;
            }
                echo "<br>";
            }
            ?>
            </div>
        </div>
    </body>
    </html>