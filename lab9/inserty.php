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
   $em_id = 2;
   $em_name = "Allen";
   $em_age = 25;
   $em_addr = "Texas";
   $em_salary = 15000.00;

   $sql =<<<EOF
      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (3, 'Teddy', 23, 'Norway', 20000.00 );

      INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
      VALUES (4, 'Mark', 30, 'Rich-Mond', 65000);


  EOF;

//   INSERT INTO COMPANY (ID,NAME,AGE,ADDRESS,SALARY)
//   VALUES ($em_id, '$em_name', $em_age, '$em_addr', $em_salary );

   $ret = $db->exec($sql);
   if(!$ret) {
      echo $db->lastErrorMsg();
   } else {
      echo "Records created successfully<br>";
   }
   
   $db->close();

?>
</body>
</html>