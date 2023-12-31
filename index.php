<?php
$albumJson = file_get_contents(__DIR__ . "/db/album.json");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imgs/favicon.ico" type="image/x-icon">
    <link rel="icon" href="imgs/favicon.ico" type="image/x-icon">

    <title>Php Dischi | json</title>

    <!-- Libraries -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>


    <!-- Custom CSS -->

    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <div id="app">
        <header>
            <div class="header-container d-flex">
            <img src="./img/Spotify_icon.png" alt="" class="img d-flex w-3">
            </div>
        </header>
        <main class="main-container">
            <div class="gallery d-flex">
                <div class="row row-cols-3 p-3"v-for="(album, i) in albums" :key="`album_${i}`">
                        <div class="card card b-3 text-white" style="width: 18rem;">
                            <div class="card-body text-center">
                                <img :src="album.poster" class="card-img-top" alt="..."> 
                                <h5 class="card-title">{{ album.title }}</h5>
                                <p class="card-text">{{ album.author }}</p>
                                <p class="card-title">{{ album.year }}</p>
                            </div>
                        </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/main.js"></script>
</body>

</html>