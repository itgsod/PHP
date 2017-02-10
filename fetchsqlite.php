<?php
   class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('combadd.sqlite');
      }
   }
   $db = new MyDB();
   if(!$db){
      echo $db->lastErrorMsg();
   } else {
      echo "Opened database successfully\n";
   }

   $sql =<<<EOF
      SELECT * FROM combo_calcs WHERE options='easy';
EOF;

   $ret = $db->query($sql);
   while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
      echo "ID = ". $row['ID'] . "\n";
   }
   echo "Operation done successfully\n";
   $db->close();
?>
