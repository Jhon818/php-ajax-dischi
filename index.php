
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</head>
<body>
<main class="bg-main d-flex align-items-center">
<section class="container">
    <ul  class="row">
        <li class=" d-flex text-center flex-wrap m-3 p-2">
        <?php
foreach ($db as $item) {
    foreach ($item as $key => $value) {
    
        echo '<img src=" ' . $item["poster"] . ' "/>';
        echo '<p>  ' . $item["title"] . ' <p/>';
        echo '<p>  ' . $item["author"] . ' <p/>';
        echo '<p>  ' . $item["genre"] . ' <p/>';
        echo '<p>  ' . $item["year"] . ' <p/>';
        break;
    }
}
?>
        </li>
    
    </ul>

   
   </section>

</main>

<style>
    body {
        width: 100vw;
        height: 100vh;
    }

    section {
        display: flex;
    }
     ul {
        width: 100%;
     }

    p {
        color: black;
    }
img {
    width: 10em;
}


    .bg-main {
    background: #1e252e;
  }

    li {
    background: rgb(13, 12, 36);
    list-style: none;
}
</style>
</body>
</html>

