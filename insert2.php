<?php



$link = mysqli_connect ('localhost' , 'root','','controlpanel') ;

$table1 ='engines';
        $table2 ='directions';
        $last_row1 = mysqli_query($link ,"SELECT * FROM $table1 ORDER BY ID DESC "); 
        $last_row2 = mysqli_query($link ,"SELECT * FROM $table2 ORDER BY ID DESC "); 
  $get_last_row1=mysqli_fetch_array($last_row1); 
  $get_last_row2=mysqli_fetch_array($last_row2); 
  echo "<center> DataBase Values" ;
  echo "<br>";
  for ($i=1; $i<=6 ; $i++){
      
    echo "Engine$i: $get_last_row1[$i] "; echo "<br>";
  }
  echo "<center> STATUS: $get_last_row1[7] " ; echo"<br>";
  
    
  echo "Direction: $get_last_row2[1] "; echo "<br>"; 
  ?>