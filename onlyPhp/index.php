<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CDN BOOTSTRAP 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>php-ajax-dischi-PHP | Marco Rispoli</title>

    <?php
    include "data.php";
    include "helper.php";

    ?>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my_style-col justify-content-center">
                <img src="img/logospot.png" alt="">
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="song-global d-flex">
                    <?php printArr($database) ?>
                </div>
            </div>
        </div>
    </div>

</body>

</html>