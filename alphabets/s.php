 <?php
for ($row=0; $row<7; $row++)
{
  for ($column=0; $column<=7; $column++)
	{
  if ((($row == 0 or $row == 3 or $row == 6) and $column > 1 and $column < 5) or ($column == 1 and ($row == 1 or $row == 2 or $row == 6)) or ($column == 5 and ($row == 0 or $row == 4 or $row == 5)))
            echo "*";    
        else  
            echo "&nbsp;&nbsp;";     
	}        
  echo "<br>";
}
?>