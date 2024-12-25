<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
    {
        if ((($column == 1 or $column == 5) and $row < 6) or (($row == 5 or $row == 4) and $column == 3) or ($row == 6 and ($column == 2 or $column == 4)))   
            echo "*";    
        else  
            echo "&nbsp ";     
    }        
  echo "<br>";
 
}
?>