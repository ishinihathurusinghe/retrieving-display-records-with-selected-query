<?php require_once('include/connection.php'); ?>

<?php

   $query = " SELECT first_name,last_name,email  FROM user";

   $result_set = mysqli_query($connection,$query);

   if($result_set){

     //echo     mysqli_num_rows($result_set); 

      $table = '<table>';
      $table .= '<tr><th>first name</th><th>last name</th><th>email</
      th> </tr>';


    while ($record = mysqli_fetch_assoc($result_set)) { 
        $table .='<tr>';

        $table .= '<td>' .  $record['first_name']  . '</td>';

        $table .= '<td>' .  $record['last_name']  . '</td>';

        $table .= '<td>' .  $record['email']  . '</td>';

        

        $table .='</tr>';
     
    }
          
         $table .= '</table>';

   }

   else{

   echo  "fail";
   }

   

?>

<html>

<head>
      <title> select query </title>

      <style>
         td, th {border: 1px solid black;}
    </style>
</head>

<body>

    <?php  echo $table ;?>
      
</body>

</html>

<?php mysqli_close($connection); ?>

