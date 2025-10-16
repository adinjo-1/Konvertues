
<?php
// Defino kurset e konvertimit (1 njësi e monedhës së huaj në Lek)
$kurset = [
    "EUR" => 97,
    "USD" => 92,
    "CAD" => 67,
    "AUD" => 60,
    "NZD" => 57,
    "GBP" => 112,
    "CHF" => 101,
    "SEK" => 8.9,
    "DKK" => 13,
    "NOK" => 9.5,
    "JPY" => 0.61,
    "CNY" => 12.5,
    "TRY" => 3.3,
    "HUF" => 0.25
];

// Kontrollo nëse është POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merr vlerën dhe monedhën e zgjedhur
    $shifra = floatval($_POST["shifra"]);
    $zgjedhja = $_POST["zgjedhja"];
    $mesazhi = "";

    if (strpos($zgjedhja, "ALL_") === 0) {
        $to = substr($zgjedhja, 4); // Nxjerr monedhën nga vlera (p.sh. "EUR")

        if (isset($kurset[$to])) {
            // Konverto Lek në monedhën e huaj
            $rezultat = $shifra / $kurset[$to];
            $mesazhi = "$shifra Lek = " . round($rezultat, 2) . " $to";
        } else {
            $mesazhi = "Monedhë e panjohur!";
        }
    } else {
        $mesazhi = "Zgjedhje e pavlefshme!";
    }
} else {
    // Nëse nuk është POST, ridrejto te faqja kryesore
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8" />
    <title>Rezultati i Këmbimit</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #7b4397, #4b6cb7);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .box {
            background-color: rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(9px);
            width: 400px;
        }
        .result {
            font-size: 24px;
            margin-bottom: 25px;
        }
        a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            background: #8e44ad;
            padding: 10px 20px;
            border-radius: 10px;
            transition: background 0.3s ease;
        }
        a:hover {
            background: #a255d6;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="result"><?php echo htmlspecialchars($mesazhi); ?></div>
        <a href="index.html">↩ Kthehu te faqja kryesore</a>
    </div>
</body>
</html>
=======
<?php
// Defino kurset e konvertimit (1 njësi e monedhës së huaj në Lek)
$kurset = [
    "EUR" => 97,
    "USD" => 92,
    "CAD" => 67,
    "AUD" => 60,
    "NZD" => 57,
    "GBP" => 112,
    "CHF" => 101,
    "SEK" => 8.9,
    "DKK" => 13,
    "NOK" => 9.5,
    "JPY" => 0.61,
    "CNY" => 12.5,
    "TRY" => 3.3,
    "HUF" => 0.25
];

// Kontrollo nëse është POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Merr vlerën dhe monedhën e zgjedhur
    $shifra = floatval($_POST["shifra"]);
    $zgjedhja = $_POST["zgjedhja"];
    $mesazhi = "";

    if (strpos($zgjedhja, "ALL_") === 0) {
        $to = substr($zgjedhja, 4); // Nxjerr monedhën nga vlera (p.sh. "EUR")

        if (isset($kurset[$to])) {
            // Konverto Lek në monedhën e huaj
            $rezultat = $shifra / $kurset[$to];
            $mesazhi = "$shifra Lek = " . round($rezultat, 2) . " $to";
        } else {
            $mesazhi = "Monedhë e panjohur!";
        }
    } else {
        $mesazhi = "Zgjedhje e pavlefshme!";
    }
} else {
    // Nëse nuk është POST, ridrejto te faqja kryesore
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8" />
    <title>Rezultati i Këmbimit</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #7b4397, #4b6cb7);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
        }
        .box {
            background-color: rgba(255, 255, 255, 0.15);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(9px);
            width: 400px;
        }
        .result {
            font-size: 24px;
            margin-bottom: 25px;
        }
        a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            background: #8e44ad;
            padding: 10px 20px;
            border-radius: 10px;
            transition: background 0.3s ease;
        }
        a:hover {
            background: #a255d6;
        }
    </style>
</head>
<body>
    <div class="box">
        <div class="result"><?php echo htmlspecialchars($mesazhi); ?></div>
        <a href="index.html">↩ Kthehu te faqja kryesore</a>
    </div>
</body>
</html>

