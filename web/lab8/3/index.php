<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        .max-lines {
            display: block;
            text-overflow: ellipsis;
            overflow: hidden;
            max-height: 6em;
            line-height: 1.5em;
        }

        #nfood {
            color: #5cc4e9;
            font-weight: bold;
            font-size: larger;
        }

        /* #learn {
            background-color: #17a2b8;
            border: solid 1px #17a2b8;
        } */
    </style>
</head>

<body class="d-flex">
    <?php
    session_start();
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";
    $response = file_get_contents($url); //get data from web (rest API link)
    $result = json_decode($response); //make data to JSON
    foreach ($result->meals as $food) {
        $name = $food->strMeal;
        $des = $food->strInstructions;
        $pic = $food->strMealThumb;
        $originalweb = $food->strSource;
    }
    echo "
    <div class='card mx-auto my-auto' style='width: 500px; height: fit-content;'>
        <img class='card-img-top'src='$pic'alt=''>
        <div class='card-body'>
            <div class='card-title text-center font-weight-bold' id='nfood'>$name</div><hr>
            <p class='text-center max-lines text-muted'>$des...</p>
        </div>
        <div class='d-flex justify-content-center mb-3'>
            <button type='button' class='btn btn-danger mx-2' style='width: fit-content;' onClick='window.location.reload();'><i class='fa fa-refresh' id='refbtn'></i></button>
            <a href='$originalweb' target='_blank'>
                <button class='btn btn-info mx-2'style='width: fit-content;' id='learn' type='submit'>Learn more!</button>
            </a>
        </div>
    </div>
        ";

    ?>



</body>

</html>