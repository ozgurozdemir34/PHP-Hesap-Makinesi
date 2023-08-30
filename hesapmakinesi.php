<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="deneme.php" method="post">
        1. sayı<input type="text" name="sayi1">
        <br>
        2.sayı<input type="text" name="sayi2">
        <input type="submit" name="Topla" value="Topla">
        <input type="submit" name="Çıkar" value="Çıkar">
        <input type="submit" name="Çarp" value="Çarp">
        <input type="submit" name="Böl" value="Böl">
    </form>
    <?php
        if (isset($_POST["Topla"])) {
            echo"Sonuç:", $_POST["sayi1"]+$_POST["sayi2"];
        }
        elseif (isset($_POST["Çarp"])) {
            echo "Sonuç:", $_POST["sayi1"]*$_POST["sayi2"];
        }
        elseif (isset($_POST["Böl"])) {
            echo "Sonuç:", $_POST["sayi1"]/$_POST["sayi2"];
        }

        elseif (isset($_POST["Çıkar"])) {
            echo "Sonuç:", $_POST["sayi1"]-$_POST["sayi2"];
        }
        else{
            echo"Lütfen değer giriniz";
        }
    ?>
</body>
</html>


