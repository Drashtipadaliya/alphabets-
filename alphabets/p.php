<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ($column == 1 or (($row == 0 or $row == 3) and $column > 0 and $column < 5) or (($column == 5 or $column == 1) and ($row == 1 or $row == 2)))
            echo "*";    
        else  
            echo "&nbsp;&nbsp;";     
	}        
  echo "<br>";
}
?>