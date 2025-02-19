<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>19.02.2025</title>
</head>

<body>
    <form action="" method="POST">
        <label for="tekst">Wprowadź tekst:</label>
        <input type="text" name="tekst">
        <br>
        <label for="tekst1">Tekst 1:</label>
        <input type="text" name="tekst1">
        <br>
        <label for="tekst2">Tekst 2:</label>
        <input type="text" name="tekst2">
        <br>
        <label for="liczbaPowtorzen">Liczba powtórzeń:</label>
        <input type="number" name="liczbaPowtorzen">
        <br>
        <label for="porownanieZnakow">Liczba znaków do porównania:</label>
        <input type="number" name="porownanieZnakow">
        <br>
        <input type="submit" value="Wykonaj">
    </form>
    <hr>
    <?php
    $tekst = $_POST['tekst'];
    $tekst1 = $_POST['tekst1'];
    $tekst2 = $_POST['tekst2'];
    $liczbaPowtorzen = $_POST['liczbaPowtorzen'];
    $porownanieZnakow = $_POST['porownanieZnakow'];
    function zad1($tekst)
    {
        if (isset($tekst)) {
            echo strlen($tekst);
        }
    }
    function zad2($tekst)
    {
        if (isset($tekst)) {
            if (strpos($tekst, 'PHP') !== false) {
                echo 'Znaleziono PHP na pozycji: ' . strpos($tekst, 'PHP');
            } else {
                echo 'Nie znaleziono PHP';
            }
        }
    }

    function zad3($tekst)
    {
        if (isset($tekst)) {
            echo str_replace("stary", "nowy", $tekst);
        }
    }

    function zad4($tekst)
    {
        if (isset($tekst)) {
            echo substr($tekst, 0, 5);
        }
    }

    function zad5($tekst)
    {
        if (isset($tekst)) {
            echo strtoupper($tekst);
        }
    }

    function zad6($tekst)
    {
        if (isset($tekst)) {
            echo trim($tekst);
        }
    }

    function zad7($tekst)
    {
        if (isset($tekst)) {
            echo htmlspecialchars($tekst);
        }
    }

    function zad8($tekst1, $tekst2)
    {
        if (isset($tekst1) && isset($tekst2)) {
            echo $tekst1 . " " . $tekst2;
        }
    }

    function zad9($tekst, $liczbaPowtorzen)
    {
        if (isset($tekst) && isset($liczbaPowtorzen)) {
            for ($i = 0; $i < $liczbaPowtorzen; $i++) {
                if ($i == $liczbaPowtorzen) {
                    echo $tekst;
                } else {
                    echo '<br>' . $tekst;
                }
            }
        }
    }

    function zad10($tekst)
    {
        if (isset($tekst)) {
            echo strrev($tekst);
        }
    }

    function zad11($tekst)
    {
        if (isset($tekst)) {
            echo strip_tags($tekst);
        }
    }

    function zad12($tekst1, $tekst2)
    {
        if (isset($tekst1) && isset($tekst2)) {
            if (strcasecmp($tekst1, $tekst2) == 0) {
                echo 'Teksty są identyczne';
            } else {
                echo 'Teksty nie są identyczne';
            }
        }
    }

    function zad13($tekst)
    {
        if (isset($tekst)) {
            $tablica = explode(" ", $tekst);
            echo implode(",", $tablica);
        }
    }

    function zad14($tekst)
    {
        if (isset($tekst)) {
            echo html_entity_decode($tekst);
        }
    }

    function zad15($tekst)
    {
        if (isset($tekst)) {
            echo ucfirst($tekst);
        }
    }

    function zad16($tekst)
    {
        if (isset($tekst)) {
            echo lcfirst($tekst);
        }
    }

    function zad17($tekst)
    {
        if (isset($tekst)) {
            echo ucwords($tekst);
        }
    }

    function zad18($tekst, $porownanieZnakow)
    {
        if (isset($tekst) && isset($porownanieZnakow)) {
            echo str_pad($tekst, $porownanieZnakow, "X");
        }
    }

    function zad19($tekst)
    {
        if (isset($tekst)) {
            echo ltrim($tekst);
        }
    }

    function zad20($tekst)
    {
        if (isset($tekst)) {
            echo rtrim($tekst);
        }
    }

    function zad21($tekst1, $tekst2)
    {
        if (isset($tekst1) && isset($tekst2)) {
            if (strcasecmp($tekst1, $tekst2) == 0) {
                echo 'Teksty są identyczne';
            } else {
                echo 'Teksty nie są identyczne';
            }
        }
    }

    function zad22($tekst1, $tekst2, $porownanieZnakow)
    {
        if (isset($tekst1) && isset($tekst2) && isset($porownanieZnakow)) {
            if (strncasecmp($tekst1, $tekst2, $porownanieZnakow) == 0) {
                echo "Pierwsze $porownanieZnakow znaków są takie same";
            } else {
                echo "Pierwsze $porownanieZnakow znaków są różne";
            }
        }
    }

    echo '<br><br> Zad 1 ';
    zad1($tekst);

    echo '<br><br> Zad 2 ';
    zad2($tekst);

    echo '<br><br> Zad 3 ';
    zad3($tekst);

    echo '<br><br> Zad 4 ';
    zad4($tekst);

    echo '<br><br> Zad 5 ';
    zad5($tekst);

    echo '<br><br> Zad 6 ';
    zad6($tekst);

    echo '<br><br> Zad 7 ';
    zad7($tekst);

    echo '<br><br> Zad 8 ';
    zad8($tekst1, $tekst2);

    echo '<br><br> Zad 9 ';
    zad9($tekst, $liczbaPowtorzen);

    echo '<br><br> Zad 10 ';
    zad10($tekst);

    echo '<br><br> Zad 11 ';
    zad11($tekst);

    echo '<br><br> Zad 12 ';
    zad12($tekst1, $tekst2);

    echo '<br><br> Zad 13 ';
    zad13($tekst);

    echo '<br><br> Zad 14 ';
    zad14($tekst);

    echo '<br><br> Zad 15 ';
    zad15($tekst);

    echo '<br><br> Zad 16 ';
    zad16($tekst);

    echo '<br><br> Zad 17 ';
    zad17($tekst);

    echo '<br><br> Zad 18 ';
    zad18($tekst, $porownanieZnakow);

    echo '<br><br> Zad 19 ';
    zad19($tekst);

    echo '<br><br> Zad 20 ';
    zad20($tekst);

    echo '<br><br> Zad 21 ';
    zad21($tekst1, $tekst2);

    echo '<br><br> Zad 22 ';
    zad22($tekst1, $tekst2, $porownanieZnakow);
    ?>
</body>

</html>