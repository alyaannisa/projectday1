<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <form action="" method="POST">
            <label for="gaji_pokok">Gaji Pokok</label><br>
            <input type="number" name="gaji_pokok"><br>
            <label for="tunjangan">Tunjangan</label><br>
            <input type="number" name="tunjangan"><br>
            <label for="potongan">Potongan</label><br>
            <input type="number" name="potongan"><br>
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $gajipokok = $_POST["gaji_pokok"];
            $tunjangan = $_POST["tunjangan"];
            $potongan = $_POST["potongan"];

            $gajibruto = $gajipokok + $tunjangan;
            $pajakpenghasilan = 0.1 * $gajibruto;
            $asuransi = 0.05 * $gajibruto;
            $gajibersih = $gajibruto - ($pajakpenghasilan + $asuransi);

            echo "Gaji Bruto: " . $gajibruto . "<br>";
            echo "Pajak Penghasilan: " . $pajakpenghasilan . "<br>";
            echo "Asuransi Kesehatan: " . $asuransi . "<br>";
            echo "Gaji Bersih: " . $gajibersih . "<br>";
        }
        ?>
    </body>
</html>