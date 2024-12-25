<?php
for ($i=0; $i<7; $i++)
{
  for ($j=0; $j<=7; $j++)
    {
        if ((($j == 1 or $j == 5) and $i < 2) or $i == $j and $j > 0 and $j < 4 or ($j == 4 and $i == 2) or (($j == 3) and $i > 3))
            echo "*";    
        else  
            echo "&nbsp ";     
    }        
  echo "<br>";
}
?>