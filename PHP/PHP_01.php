<!DOCTYPE html>
<html>
<head>
    <title>Form Input</title>
</head>
<body>
    <?php
    $nameErr = $addressErr = $phoneErr = $genderErr = "";
    $name = $address = $phone = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Kolom tidak boleh kosong";
        } elseif (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
            $nameErr = "Isi berupa huruf saja";
        } else {
            $name = test_input($_POST["name"]);
        }

        if (empty($_POST["address"])) {
            $addressErr = "Kolom tidak boleh kosong";
        } else {
            $address = test_input($_POST["address"]);
        }

        if (empty($_POST["phone"])) {
            $phoneErr = "Kolom tidak boleh kosong";
        } elseif (!preg_match("/^[0-9]*$/", $_POST["phone"])) {
            $phoneErr = "Isi berupa angka saja";
        } else {
            $phone = test_input($_POST["phone"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Kolom tidak boleh kosong";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>

    <h2>Form Input</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Nama: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        Alamat: <input type="text" name="address" value="<?php echo $address; ?>">
        <span class="error">* <?php echo $addressErr; ?></span>
        <br><br>
        Nomor Telepon: <input type="text" name="phone" value="<?php echo $phone; ?>">
        <span class="error">* <?php echo $phoneErr; ?></span>
        <br><br>
        Jenis Kelamin:
        <select name="gender">
            <option value="">Pilih</option>
            <option value="Laki-laki" <?php if ($gender == "Laki-laki") echo "selected"; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if ($gender == "Perempuan") echo "selected"; ?>>Perempuan</option>
        </select>
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($nameErr) && empty($addressErr) && empty($phoneErr) && empty($genderErr)) {
        echo "<h3>Form Submitted Successfully!</h3>";
        echo "Nama: $name<br>";
        echo "Alamat: $address<br>";
        echo "Nomor Telepon: $phone<br>";
        echo "Jenis Kelamin: $gender<br>";
    }
    ?>
</body>
</html>
