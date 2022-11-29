<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document2</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        label {
            font-weight: bold;
            padding-left: 10px;
        }
        body{
            padding: 1%;
        }
    </style>
</head>
<body>

    <p class="h1">Employee Form</p>
    <form action="" method="POST">
        <label>ID :</label>
        <input type="number" name="id"><br><br>
        <label>Name :</label>
        <input type="text" name="name"><br><br>
        <label>Age :</label>
        <input type="number" name="age"><br><br>
        <label>Salary :</label>
        <input type="number" name="salary"><br><br>
        <label>Address :</label>
        <textarea name="address" id="address" cols="40" rows="4"></textarea><br><br>
        <button name="Submit" id="Submit" class="btn btn-primary">Submit</button>
    </form>
    <h1>List of Employees</h1>
    <?php
    // Connect to Database
    class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('owendb.db');
        }
    }

    // Open Database
    $db = new MyDB();
    if (!$db) {
        echo $db->lastErrorMsg();
    } else {
        echo "<br>";
    }

    //Add data to db if click submit

    if (isset($_POST["Submit"])) {
        $em_id = $_POST["id"];
        $em_name = $_POST["name"];
        $em_age = $_POST["age"];
        $em_addr = $_POST["address"];
        $em_salary = $_POST["salary"];

        $sql = <<<EOF
       INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
       VALUES ($em_id, '$em_name', $em_age, '$em_addr', $em_salary );
   EOF;
        $ret = $db->exec($sql);
        // if (!$ret) {
        //     echo $db->lastErrorMsg();
        // } else {
        //     echo "Records created successfully<br>";
        // }
    }
    // SQL SELECT
    $sqlQ = "SELECT * from COMPANY";
    $ret = $db->query($sqlQ);

    ?>
    <table class="table">

        <tr>
            <thead>
                <td>ID </td>
                <td>Name </td>
                <td>Age </td>
                <td>Address </td>
                <td>Salary </td>
            </thead>
        </tr>
        <?php while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['NAME'] . "</td>";
            echo "<td>" . $row['AGE'] . " </td>";
            echo "<td>" . $row['ADDRESS'] . " </td>";
            echo "<td>" . $row['SALARY'] . "</td></tr>";
            // $em_id = $row['ID'];
        } ?>
    </table>
    </form>
</body>

</html>