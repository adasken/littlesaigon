<?php

   class MyDB extends SQLite3
   {
      function __construct()
      {
            $this->open('restaurant.db');
      }
   }

   function getOrder($searchTerm = null) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }
      if(!$searchTerm) {
         $sql ='SELECT * from ORDERS;';
      } else {
         $sql ='SELECT * FROM ORDERS WHERE FNAME LIKE "'.$searchTerm.'" OR LNAME LIKE "'.$searchTerm.'" OR PICKUP LIKE "'.$searchTerm.'" OR DISHES LIKE "'.$searchTerm.'"' ;
      }
      $ret = $db->query($sql);
      $array = [];
      if(!$ret){
        echo $db->lastErrorMsg();
        return [];
      } else {
         while($row = $ret->fetchArray(SQLITE3_ASSOC) ){
            $array[] = $row;
         }
         $db->close();
         return $array;
      }
   }
   
   
   function addOrder($fname, $lname, $phone, $dishes, $price, $pickup) {
      
      $db = new MyDB();
      if(!$db){
         echo '<script type="text/javascript">alert("'.$db->lastErrorMsg().'");</script>';
      } else {
         //echo "Opened database successfully\n";
      }

      $sql ='INSERT INTO ORDERS (FNAME, LNAME, PHONE, DISHES, PRICE, PICKUP) VALUES ("'.$fname.'", "'.$lname.'", "'.$phone.'", "'.$dishes.'", "'.$price.'","'.$pickup.'");';
      $db->query($sql);
   }
   
      
?>