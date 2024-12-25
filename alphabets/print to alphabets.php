
<form method="post">
First Value:
<input type="text" name="no1"><br>
<input type="submit" name="submit" value="SUM">
</form>
<table width="">
<tr>
<?php  
if(isset($_POST['submit']))
{
$nm=($_POST['no1']);
$len=strlen($nm);
//echo $len;
for($i=1;$i<=$len;$i++)
{

	$ch=substr($nm,$i-1,1);
	//echo $ch."<br>";
	
	
	echo "<td>";

if($ch=='a')
{	

	include("a.php");
	echo"\t";


}
else if($ch=='b')
{

	include("b.php");
	echo"\t";
}
else if($ch=='c')
{
	
	include("c.php");
}
else if($ch=='d')
{
		include("d.php");
}
else if($ch=='e')
{
	include("e.php");
}

else if($ch=='f')
{
	include("f.php");
}
else if($ch=='g')
{
	include("g.php");
}
else if($ch=='h')
{
	include("h.php");
}
else if($ch=='i')
{
	include("i.php");
}
else if($ch=='j')
{
	include("j.php");
}
else if($ch=='k')
{
	include("k.php");
}
else if($ch=='l')
{
	include("l.php");
}
else if($ch=='m')
{
	include("m.php");
}
else if($ch=='n')
{
	include("n.php");
}
else if($ch=='o')
{
	include("o.php");
}
else if($ch=='p')
{
	include("p.php");
}
else if($ch=='q')
{
	include("q.php");
}
else if($ch=='r')
{
	include("r.php");
}
else if($ch=='s')
{
	include("s.php");
}
else if($ch=='t')
{
	include("t.php");
}
else if($ch=='u')
{
	include("u.php");
}
else if($ch=='v')
{
	include("v.php");
}
else if($ch=='w')
{
	include("w.php");
}
else if($ch=='x')
{
	include("x.php");
}
else if($ch=='y')
{
	include("y.php");
}
else if($ch=='z') 
{
	include("z.php");
}

	echo "</td>";
}
	
}
?>
</tr>
</table>