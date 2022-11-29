<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Currency Converter</h1>

    <form action="" method="POST">
        <label for="from">From :</label>
        <select name="fcur" id="fcur">
            <option value="THB" selected>THB</option>
            <option value="JPY">JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" id="fvalue" name="fvalue" value="100" required />

        <br>
        <br>

        <?php
    $output = 0;
 if(isset($_POST['submit']))
 {
  $fb = $_POST['fcur'];     
  $tb = $_POST['tcur'];
  $input = $_POST['fvalue'];
  $url = "http://10.0.15.20/lab8/restapis/currencyrate";
  $response = file_get_contents($url);
  $result = json_decode($response);
//   echo  $result->rates->$tb. 'THB';
  $output = $input/$result->rates->$fb * $result->rates->$tb;

  }
?>
        <label for="to">To :</label>
        <select name="tcur" id="tcur">
            <option value="THB">THB</option>
            <option value="JPY" selected>JPY</option>
            <option value="CNY">CNY</option>
            <option value="SGD">SGD</option>
            <option value="USD">USD</option>
        </select>
        <input type="text" id="tvalue" name="tvalue" value=<?php echo "$output" ?>>
        <br>
        <br>

        <button type="submit" name="submit">Convert</button>
        <br>

    </form>

</body>

</html>