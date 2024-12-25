
<?php
for ($i=0; $i<6; $i++)
{
  for ($j=0; $j<=7; $j++)
    {
  if ($j == 3 or ($i == 0 and $j > 0 and $j < 6))
            echo "*";    
        else  
            echo "&nbsp ";     
    }        
  echo "<br>";
 
}
?>