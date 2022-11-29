<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
   <style>
      thead {
         /* text-align: center; */
         font-weight: bold;
      }
      tr{
         /* border-bottom: solid 1px black; */
      }
   </style>

<body>
   <form action="" method="post">
      <?php
      // Connect to Database 
      class MyDB extends SQLite3
      {
         function __construct()
         {
            $this->open('customers.db');
         }
      }

      // Open Database 
      $db = new MyDB();
      if (!$db) {
         echo $db->lastErrorMsg();
      }

      // Query process 
      // SQL SELECT 
      $sql = "SELECT * from customers";
      // $sqldel = "DELETE FROM 'customers' ORDER BY 'CustomerId' DESC limit 1;";

      $ret = $db->query($sql);
      // echo "Operation done successfully<br>";

      ?>
      <table class="table">

         <tr>
            <thead>
               <td>ID </td>
               <td>Name </td>
               <td>Address </td>
               <td>Phone </td>
               <td>Email </td>
            </thead>
         </tr>
         <?php while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['CustomerId'] . "</td>";
            echo "<td>" . $row['FirstName'] . $row['LastName'] . "</td>";
            echo "<td>" . $row['Address'] . " </td>";
            echo "<td>" . $row['Phone'] . " </td>";
            echo "<td>" . $row['Email'] . "</td></tr>";
            $em_id = $row['CustomerId'];
         } ?>
      </table>



      <button type="submit" name="Submit" value="Submit">Delete last row</button>
   </form>
   <?php
   if (isset($_POST["Submit"])) {
      $sqldel = "DELETE from customers where CustomerId = $em_id;";
      $ret = $db->exec($sqldel);

      // echo $db->changes();

      // Close database
      $db->close();
      // echo "wow";
   }
   ?>
</body>

</html>