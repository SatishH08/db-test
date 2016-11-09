<?php
   $host        = "host=10.65.162.5";
   $port        = "port=";
   $dbname      = "dbname=tgt_dam_opentext";
   $credentials = "user=z013jlk password=qazwsx!2013!!!";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db){
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>
