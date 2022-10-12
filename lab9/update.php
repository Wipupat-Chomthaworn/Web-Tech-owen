<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   // Connect to Database 
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('wt-company.db');
      }
   }

   // Open Database 
   $db = new MyDB();
   if(!$db) {
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully<br>";
   }

   // Query process 
  /* Connect and Open Database */

  $em_id = 1;

  $sql =<<<EOF
     UPDATE COMPANY set SALARY = 25000.00 where ID=$em_id;
  EOF;

  $ret = $db->exec($sql);
  if(!$ret) {
     echo $db->lastErrorMsg();
  } else {
     echo $db->changes(), " Record updated successfully<br>";
  }

  // Close database
  $db->close();

?>
</body>
</html>