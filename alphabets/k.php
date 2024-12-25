
<?php
$b = 5;    
$a = 0;  
for ($row=0; $row<=7; $row++)
{
    for ($column=0; $column<=7; $column++)
      {
        if ($column == 1 or (($row == $column + 1) and $column != 0))
            echo "*";   
        else if ($row == $a and $column == $b)
           {  
              echo "*";    
              $a=$a+1;  
              $b=$b-1;
           }
        else
            echo "&nbsp;&nbsp;";   
}    
     echo "<br>";    
}
?>