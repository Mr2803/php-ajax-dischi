<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
    <title>php-ajax-dischi-HB-PHP</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 my_style-col justify-content-center">
                <img src="img/logospot.png" alt="">
                <input class="search-input" type="text" placeholder="Cerca">

            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="song-global d-flex">

                </div>
            </div>
        </div>
    </div>

    <!-- HANDLEBARS -->
    <script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>
    <script id="hb-song" type="text/x-handlebars-template">
        <div class="song">

        <img src="{{poster}}" alt="">
        <p>{{title}}</p>
        <p>{{author}}</p>
        <p>{{year}}</p>
    </div>
    </script>

    <!-- CDN JQUERY 3.3.1 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- MY SCRIPT -->
    <script src="script/script.js"></script>

</body>

</html>