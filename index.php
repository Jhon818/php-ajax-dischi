
<?php
#importing database
include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Disks</title>
</head>
<body>

<?php
foreach ($db as $key => $value) {
    foreach ($value as $key => $value) {
        echo "<ul>$value</ul>" . "<br>";
    }
}
?>
<style>
    body {
        width: 100vw;
        height: 100vh;
    }

    ul {

      width: 2rem;

    }

    li {
    background: rgb(13, 12, 36);
    list-style: none;
}
</style>
</body>
</html>

