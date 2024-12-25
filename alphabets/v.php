<?php
for ($i=0; $i<7; $i++)
{
  for ($j=0; $j<=7; $j++)
    {
          if ((($j == 1 or $j == 5) and $i < 5) or ($i == 6 and $j == 3) or ($i == 5 and ($j == 2 or $j == 4)))
            echo "*";    
        else  
            echo "&nbsp ";     
    }        
  echo "<br>";
}
 
?>