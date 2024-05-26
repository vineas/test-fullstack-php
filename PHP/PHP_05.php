<!DOCTYPE html>
<html>
<head>
    <title>Matriks</title>
</head>
<body>
    <form method="post">
        <label for="size">Input jumlah ordo matriks (max 10):</label>
        </br>
        <input type="number" id="size" name="size" min="1" max="10" required>
        <input type="submit" value="Buat Matriks">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["size"]);
        if ($n > 0 && $n <= 10) {
            echo "<pre>";
            for ($i = 0; $i < $n; $i++) {
                for ($j = 0; $j < $n; $j++) {
                    if ($j == ($n - 1 - $i)) {
                        echo ($n - $i);
                    } else {
                        echo "*";
                    }
                }
                echo "\n";
            }
            echo "</pre>";
        } else {
            echo "<p>Ukuran matriks harus antara 1 dan 10.</p>";
        }
    }
    ?>
</body>
</html>
