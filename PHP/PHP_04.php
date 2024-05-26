<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Ganjil dalam Rentang</title>
</head>
<body>
    <form method="POST">
        <label for="angka1">Angka 1:</label>
        <input type="number" id="angka1" name="angka1" required>
        <br>
        <label for="angka2">Angka 2:</label>
        <input type="number" id="angka2" name="angka2" required>
        <br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $angka1 = intval($_POST['angka1']);
        $angka2 = intval($_POST['angka2']);

        function getOddNumbersInRange($angka1, $angka2) {
            $oddNumbers = array();
            
            for ($i = $angka1; $i <= $angka2; $i++) {
                if ($i % 2 != 0) {
                    $oddNumbers[] = $i;
                }
            }
            
            return $oddNumbers;
        }

        $output = getOddNumbersInRange($angka1, $angka2);
        echo "<h2>Bilangan Ganjil dari $angka1 hingga $angka2:</h2>";
        echo "<pre>";
        print_r($output);
        echo "</pre>";
    }
    ?>
</body>
</html>
