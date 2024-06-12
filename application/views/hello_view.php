<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hello Akbar - 2010020007</title>
</head>

<body>
    <h1>Selamat Datang di Web Akbar <?= $nama; ?> - <?= $npm; ?></h1>
    <?php
    if (isset($mvc)) {
        echo $mvc;
    }
    ?>

</body>

</html>