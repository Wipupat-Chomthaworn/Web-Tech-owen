<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            margin-left: 3%;
        }
        table,
        th,
        td {
            height: 4rem;
            width: 30rem;
            border: 1px solid black;
            text-align: center;
            font-size: larger;
        }
    </style>
</head>

<body>
    <h1>March</h1>
    <table>
        <tr>
            <th>Su</th>
            <th>Mo</th>
            <th>Tu</th>
            <th>We</th>
            <th>Th</th>
            <th>Fr</th>
            <th>Sa</th>
        </tr>

        <!-- <td> &nbsp;</td><td> &nbsp;</td> -->
        <?php
        echo "<td> &nbsp;</td><td> &nbsp;</td><td> 1</td><td> 2</td><td>3</td><td> 4</td><td> 5</td></tr><td> 6</td>";
        for ($i = 7; $i <= 31; $i++) {
            if ($i % 7 == 5) {
                echo "<td>$i</td></tr>";
                echo "<tr>";
            } else {
                echo "<td>$i</td>";
            }
        }
        echo "<td>&nbsp;</td><td>&nbsp;</td>";

        ?>

    </table>



</body>

</html>