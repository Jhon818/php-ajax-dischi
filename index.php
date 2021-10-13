
<?php
#importing database
// include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.23.0/axios.min.js" integrity="sha512-Idr7xVNnMWCsgBQscTSCivBNWWH30oo/tzYORviOCrLKmBaRxRflm2miNhTFJNVmXvCtzgms5nlJF4az2hiGnA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Disks</title>
</head>
<body>
    <div id="app">
    <main class="bg-main d-flex align-items-center">
<ul class="row">
      <li class="col-xl-2 col-lg-2 col-sm-5 text-center m-3 p-2" v-for="(card,index) in cards" :key="index">
<img class="w-100" :src="card.poster" alt="">

<div class="d-flex flex-column">
         <span class="text-light">{{card.title}}</span>
         <span>{{card.author}}</span>
         <span>{{card.year}}</span>
</div>

      </li>
  </ul>

</section>

    </main>


    </div>

<style>
    body {
        width: 100vw;
        height: 100vh;
    }
    li {
    background: rgb(13, 12, 36);
    list-style: none;
}
span {
    color: grey;
}
.bg-main {
    background: #1e252e;
  }

  img {
    width: 10em;
}

#app {
    width: 100vw;
    height: 100vh;
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="js/main.js"></script>
</body>
</html>

