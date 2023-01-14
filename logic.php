
<?php
#6
//select==get from to TABLE
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   $dbname ='cmsQ2';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   echo 'Connected successfully<br>';
  
   $sql = 'SELECT emp_id, emp_name, emp_salary FROM employee';

   $result = mysqli_query($conn,$sql );
   
   if(! $result ) {
      die('Could not get data: ' . mysqli_error($conn));
   }


   if (mysqli_num_rows($result) > 0) {
      // output data of each row

      // echo "<table>";
      while($row = mysqli_fetch_assoc($result)) {
         echo "EMP ID :{$row['emp_id']}  <br> ".
         "EMP NAME : {$row['emp_name']} <br> ".
         "EMP SALARY : {$row['emp_salary']} <br> ".
         "<a href='#'>View</a><br>".
         "--------------------------------<br>";
      }
      // echo "</table>";

    } else {
      echo "0 results";
    }
    /* //Its a good practice to release cursor memory
    mysqli_free_result($result);
    */

   
   mysqli_close($conn);
?>
