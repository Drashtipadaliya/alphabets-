<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ($column == 1 or (($row == 0 or $row == 3) and $column > 1 and $column < 5) or ($column == 5 and $row != 0 and $row < 3) or ($column == $row - 1 and $row > 2))
            echo "*";    
        else  
            echo "&nbsp;&nbsp;";     
	}        
  echo "<br>";
}
?>