<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    <form id="calform" action="index.php" method="post">
        <label for="calc"><b>กรอกสูตรคูณ : </b></label>
        <input type="text" id="inpvalue" name="inpvalue" value="7" />
        <input type="submit" id="submit" class="btn btn-primary" value="แสดงตาราง">
    </form>

    <?php
    
  if (isset($_POST['inpvalue'])) {
      $number = $_POST['inpvalue'];
      $v = intval($number);
      echo `<h1><b>ตารางสูตรคูณแม่ $v </b></h1>`;
      for ($i = 1; $i <= 12; $i++) {
          echo "$v  X  $i  =   " . $v * $i ."<br>";
          echo "<hr>";
      }
  }
  ?>
  </div>
</body>
</html>