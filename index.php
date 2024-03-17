<?php 

function Result($xml,$javascript,$git,$totalmarks,$percentage) 
{
      echo"Xml :" .$xml."<br>";
      echo"Javascript :" .$javascript."<br>";
      echo"Git :" .$git."<br>";
      $obtainedMarks = $git + $xml + $javascript;
      echo"Obtained Marks :" .$obtainedMarks."<br>";
      echo"Total Marks :" .$totalmarks."<br>";
      $calculation = ($obtainedMarks / $totalmarks) * $percentage."<br>";
      echo "Percentage: " . $calculation . "<br>";
}

Result(90,90,80,300,100);

?>