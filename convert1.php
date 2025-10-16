<?php
$kursi = 97; // 1 € = 97 Lek

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $shifra = $_POST["shifra"];
    $zgjedhja = $_POST["zgjedhja"];

    $vlera = floatval($shifra);
    $mesazhi = "";

    if ($zgjedhja == "1") {
        $rezultat = $vlera / $kursi;
        $mesazhi = "$vlera Lek = " . round($rezultat, 2) . " Euro";
    } elseif ($zgjedhja == "2") {
        $rezultat = $vlera * $kursi;
        $mesazhi = "$vlera Euro = $rezultat Lek";
    } else {
        $mesazhi = "Zgjedhje e pavlefshme!";
    }
} else {
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="sq">
<head>
    <meta charset="UTF-8" />
    <title>Rezultati i Këmbimit</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to right, #7b4397, #4b6cb7);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            flex-direction: column;
            padding: 20px;
        }

        .result-box {
            background-color: rgba(255, 255, 255, 0.15);
            padding: 50px 40px;
            border-radius: 20px;
            width: 420px;
            text-align: center;
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.35);
            backdrop-filter: blur(9px);
        }

        .emoji {
            font-size: 60px;
            margin-bottom: 15px;
            filter: drop-shadow(0 0 5px rgba(255, 255, 255, 0.7));
        }

        h2 {
            font-size: 26px;
            margin-bottom: 20px;
        }

        .result-highlight {
            background-color: rgba(255, 255, 255, 0.25);
            padding: 20px;
            border-radius: 12px;
            font-size: 22px;
            font-weight: bold;
            color: #fff;
            box-shadow: 0 0 10px rgba(255, 255, 255, 0.3);
            margin-bottom: 25px;
        }

        a {
            display: inline-block;
            padding: 12px 25px;
            border-radius: 12px;
            background: linear-gradient(45deg, #8e44ad, #3498db);
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: 0.3s ease;
            box-shadow: 0 5px 15px rgba(142, 68, 173, 0.7);
        }

        a:hover {
            background: linear-gradient(45deg, #a255d6, #5dade2);
            box-shadow: 0 8px 25px rgba(162, 82, 214, 0.9);
        }

        .note {
            margin-top: 15px;
            font-size: 13px;
            opacity: 0.8;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="result-box">
        <div class="emoji">💸</div>
        <h2>Rezultati i Konvertimit</h2>
        <div class="result-highlight">
            <?php echo htmlspecialchars($mesazhi); ?>
        </div>
        <a href="index.html">↩ Kthehu te faqja kryesore</a>
        <div class="note">Kursi përdorur: 1 Euro = 97 Lek</div>
    </div>
</body>
</html>
