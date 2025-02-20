<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>20.02.2025</title>\
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container, .data {
            width: 30%;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 15px;
            margin-top: 20px;
        }

        .container > h1 {
            text-align: center;
        }

        .data > h1 {
            text-align: center;
        }

        h1 {
            font-size: 22px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input {
            border-radius: 5px;
            padding: 10px 5px;
            margin-top: 5px;
            border: 1px solid #ddd;
        }

        input[type="submit"] {
            margin-top: 20px;
            background-color: limegreen;
            color: #fff;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <?php
        $tablica = array(7, 3, 1, 6, 9, 5, 4, 10, 3, 2, 4, 3, 6, 12, 15, 4); 
        for ($i = 0; $i < count($tablica); $i++) {
            echo $tablica[$i] . " ";
        }

        echo "<br>";

        foreach ($tablica as $element) {
            echo $element . " ";
        }

        echo "<br>";

        echo "Suma elementów tablicy wynosi: " . array_sum($tablica);
        echo "<br>";
        echo "Średnia elementów tablicy wynosi: " . array_sum($tablica) / count($tablica);

        echo "<br>";

        $x = 0;
        foreach ($tablica as $element) {
            if ($element == 3) {
            $x++;
            }
        }
        echo "Liczba wystąpień liczby 3 w tablicy: " . $x;

        echo "<br>";


        $parzyste = 0;
        $suma_parzystych = 0;
        $nieparzyste = 0;
        $suma_nieparzystych = 0;
        foreach ($tablica as $element) {
            if ($element % 2 == 0) {
                $parzyste++;
                $suma_parzystych += $element;
            } else {
                $nieparzyste++;
                $suma_nieparzystych += $element;
            }
        }

        echo "Liczba liczb parzystych w tablicy: " . $parzyste;
        echo "<br>";
        echo "Liczba liczb nieparzystych w tablicy: " . $nieparzyste;
        echo "<br>";
        echo "Suma liczb parzystych w tablicy: " . $suma_parzystych;
        echo "<br>";
        echo "Suma liczb nieparzystych w tablicy: " . $suma_nieparzystych;
        echo "<br>";

        $tablica_asocjacyjna = array(
            "a" => 5,
            "b" => 3,
            "c" => 7,
            "d" => 1,
            "e" => 9,
            "f" => 2,
            "g" => 4
        );

        asort($tablica_asocjacyjna);
        foreach ($tablica_asocjacyjna as $klucz => $wartość) {
            echo $klucz . " => " . $wartość . "<br>";
        }
        echo "<br>";

        arsort($tablica_asocjacyjna);
        foreach ($tablica_asocjacyjna as $klucz => $wartość) {
            echo $klucz . " => " . $wartość . "<br>";
        }
        echo "<br>";

        ////////////////////////////////////////////////////////

        $tablica_losowa = array();
        for ($i = 0; $i < 100; $i++) {
            $tablica_losowa[$i] = rand(1, 10000);
        }

        echo "<ul>";
        foreach ($tablica_losowa as $element) {
            echo "<li>" . $element . "</li>";
        }
        echo "</ul>";

        $parzyste = 0;
        $nieparzyste = 0;
        $min = $tablica_losowa[0];
        $max = $tablica_losowa[0];
        $suma = 0;
        foreach ($tablica_losowa as $element) {
            if ($element % 2 == 0) {
                $parzyste++;
            } else {
                $nieparzyste++;
            }
            $suma += $element;
        }

        echo "Liczba liczb parzystych w tablicy: " . $parzyste;
        echo "<br>";
        echo "Liczba liczb nieparzystych w tablicy: " . $nieparzyste;
        echo "<br>";
        echo "Najmniejsza liczba w tablicy: " . min($tablica_losowa);
        echo "<br>";
        echo "Największa liczba w tablicy: " . max($tablica_losowa);
        echo "<br>";
        echo "Średnia arytmetyczna liczb w tablicy: " . $suma / count($tablica_losowa);

        ////////////////////////////////////////////////////////

        $europa = [ 

            "Włochy" => "Rzym",  
    
            "Belgia" => "Bruksela", 
    
            "Dania" => "Kopenhaga",  
    
            "Finlandia" => "Helsinki", 
    
            "Francja" => "Paryż",  
    
            "Niemcy" => "Berlin", 
    
            "Rosja" => "Moskwa",  
    
            "Polska" => "Warszawa", 
    
            "Hiszpania" => "Madryt",  
    
            "Portugalia" => "Lizbona", 
    
            "Holandia" => "Amsterdam",  
    
            "Szwecja" => "Sztokholm", 
    
            "Norwegia" => "Oslo",  
    
            "Szwajcaria" => "Berno", 
    
            "Austria" => "Wiedeń",  
    
            "Grecja" => "Ateny", 
    
            "Czechy" => "Praga",  
    
            "Węgry" => "Budapeszt" 
    
        ]; 
        
        echo "<br>";
        echo "<br>";
        ksort($europa);
        foreach ($europa as $klucz => $wartość) {
            echo $klucz . " => " . $wartość . "<br>";
        }
    ?>

    <div class="container">
    <form action="" method="POST"></form>
        <h1>Formularz danych osobowych</h1>
        <form action="" method="POST">
        <label>Imię:</label>
        <input type="text" name="name">
        <label>Nazwisko:</label>
        <input type="text" name="surname">
        <label>Klasa:</label>
        <input type="text" name="class">
        <label>Grupa:</label>
        <input type="text" name="group">
        <input type="submit" value="Prześlij">
    </form>
    </div>
    <div class="data">
        <h1>Przekazane dane:</h1>
        <?php
        if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['class']) && isset($_POST['group'])) {
            $students[] = array(
                "name" => $_POST['name'],
                "surname" => $_POST['surname'],
                "class" => $_POST['class'],
                "group" => $_POST['group']
            );
            echo "<ul>";
            foreach ($students as $student) {
                echo "<li>Imię: " . $student['name'] . "</li>";
                echo "<li>Nazwisko: " . $student['surname'] . "</li>";
                echo "<li>Klasa: " . $student['class'] . "</li>";
                echo "<li>Grupa: " . $student['group'] . "</li>";
                
            }
            echo "</ul>";
        }

        ?>
    </div>
</body>
</html>
