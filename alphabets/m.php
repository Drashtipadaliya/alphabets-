<?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ($column == 1 or $column == 5 or ($row == 2 and ($column == 2 or $column == 4)) or ($row == 3 and $column == 3))
            echo "*";    
        else  
            echo "&nbsp;&nbsp;";     
	}        
  echo "<br>";
}
?>