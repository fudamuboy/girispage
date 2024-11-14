<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
<form action="gorunteleme.php" method="post">
<p>Giris icin bilgilerin giriniz</p>
    <label for="ad">AD:</label>
    <input type="text" name="ad" id="ad" placeholder="Adiniz yaz"><br>

    <label for="soyad">SOYAD:</label>
    <input type="text" name="soyad" id="soyad" placeholder="Soyadiniz yaz"><br>
     
    <label for="mail">ADRESS:</label>
    <input type="e-mail" name="mail" id="mail" placeholder="mailinizi gir"><br>
    
    <label for="gender">Cinsiyet:</label>
        <label for="erkek">Erkek</label>
        <input type="radio" id="erkek" name="gender" value="Erkek">
        <label for="kiz">Kız</label>
        <input type="radio" id="kiz" name="gender" value="Kız"><br>

    <input type="submit" name="btn" id="btn" value="GIRIS YAP">
</form>

</body>
</html>
