<html>

<head>
    <meta charset="UTF-8">
    <title>Kodluyoruz Php Form İşlemleri</title>
    <style>
         input {
            color: #262626;
            border: 1px solid rgba(0, 0, 0, 0.1);
            font-size: 12pt;
            padding: 10px 10px;
            border-radius: 11px;
        }

        button {
            border: 0;
            font-size: 12pt;
            cursor: pointer;
            background-color: #333333;
            color: #fff;
            padding: 10px 10px;
            border-radius: 11px;
            margin-left: 5px;
        }
        div{
            border: 0;
            font-size: 12pt;
            background-color: #666666;
            color: #fff;
            padding: 10px 10px;
            border-radius: 11px;
            margin-left: 5px;
            max-width: 500px;
        }
    </style>
</head>

<body>
    <div>
    <form action="./" method="post">
        <input type="text" name="number" placeholder="Sayı girin...">
        <button type="submit">Gönder</button>
    </form>

    <?php
    function message($str = "")
    {
    ?>
        <div><?php echo $str; ?></div>
    <?php
    }
    if (isset($_POST["number"])) {
        $number = @$_POST["number"];
        if ($number === "") {
            message("Boş Değer Gönderilemez!");
        }
        else {
            if ($number % 3 === 0) {
                message("${number} sayısı 3 ile tam bölünüyor");
            }
            else {
                $afterNum = $number;
                $afterNum++;
                while ($afterNum % 3 !== 0) {
                    $afterNum++;
                }
                message("${number} sayısı 3 ile tam bölünmüyor. 3 ile bölünebilecek ilk sayı: ${afterNum}");
            }
        }
    }
    ?>
    </div>
</body>

</html>

<?php