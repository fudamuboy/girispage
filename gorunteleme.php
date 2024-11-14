<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: #f5f5dc; 
            text-transform: capitalize;
            font-family: Arial, sans-serif;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        p {
            text-align: center;
            font-size: 1.2em;
            color: #444;
        }

        .error-message {
            text-align: center;
            font-size: 1.1em;
            color: red;
        }

        .result-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        a:hover{
        color=white;
        background-color=yellow;
        text-align=center;
        }
    </style>
</head>
<body>

<h1>Sayfa Bilgiler</h1>
<div class="result-container">
    <?php
    if (isset($_POST['btn'])) {
        $ad = htmlspecialchars($_POST['ad']);
        $soyad = htmlspecialchars($_POST['soyad']);
        $mail = htmlspecialchars($_POST['mail']);
        $gender=htmlspecialchars($_POST['gender']);

        echo "<p>Ad: $ad</p>";
        echo "<p>SOYAD: $soyad</p>";
        echo "<p>MAIL: $mail</p>";
        echo "<p>Cinsiyet:$gender</p>";
    } else {
        echo "<p class='error-message'>Probleme: Form gönderilmedi.</p>";
    }
    ?>
    <a href="demo.php">GERI DON</a>
</div>

</body>
</html>
