<?php
for ($i=0; $i<7; $i++)
{
  for ($j=0; $j<=7; $j++)
    {
    if (($j == 1 and $i != 0 and $i != 6) or (($i == 0 or $i == 6) and $j > 1 and $j < 5) or ($i == 3 and $j > 2 and $j < 6) or ($j == 5 and $i != 0 and $i != 2 and $i != 6))
            echo "*";    
        else  
            echo "&nbsp ";     
 
    }        
  echo "<br>";
}
?>
