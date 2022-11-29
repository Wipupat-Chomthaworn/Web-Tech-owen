<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Gallery</h1>
        <div class="row gap-4">
            <?php
            $Pic = array( // Key => Value
                "https://images.pexels.com/photos/301930/pexels-photo-301930.jpeg?cs=srgb&dl=pexels-riccardo-301930.jpg&fm=jpg"
                ,"https://images.pexels.com/photos/2050994/pexels-photo-2050994.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/837358/pexels-photo-837358.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/39866/entrepreneur-startup-start-up-man-39866.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/445109/pexels-photo-445109.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/240561/pexels-photo-240561.jpeg?cs=srgb&dl=pexels-fabien-pasquet-240561.jpg&fm=jpg"
                ,"https://images.pexels.com/photos/301930/pexels-photo-301930.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/699459/pexels-photo-699459.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/2050979/pexels-photo-2050979.jpeg?cs=srgb&dl=pexels-edu-carvalho-2050979.jpg&fm=jpg"
                ,"https://images.pexels.com/photos/1851164/pexels-photo-1851164.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/762527/pexels-photo-762527.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/301952/pexels-photo-301952.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/2102416/pexels-photo-2102416.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/2023384/pexels-photo-2023384.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/1848565/pexels-photo-1848565.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/1164674/pexels-photo-1164674.jpeg?auto=compress&cs=tinysrgb&w=1600"
                ,"https://images.pexels.com/photos/772662/pexels-photo-772662.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/7340253/pexels-photo-7340253.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/1390534/pexels-photo-1390534.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/2690323/pexels-photo-2690323.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/1055691/pexels-photo-1055691.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/157675/fashion-men-s-individuality-black-and-white-157675.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/1181424/pexels-photo-1181424.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/1587009/pexels-photo-1587009.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                ,"https://images.pexels.com/photos/1987301/pexels-photo-1987301.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
            );
            foreach ($Pic as $PicName) {
                echo '<img class="col" style="width:250px;" src="' . $PicName . '"/>';
            }
            ?>
        </div>
    </div>
</body>

</html>