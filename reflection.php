<?php

$con=pg_connect("host=sbazy dbname=s173152 user=s173152 password=jHNHdN7K");
$query="select reflection from PanTadeusz";
$query = "insert into PanTadeusz (title, reflection) values ('$title','$reflection')";
$result=pg_exec($con, $query);

if ($result)
{
	echo ("DONE");
}
else
{
	echo("FAIL");
}


?>