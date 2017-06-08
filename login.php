<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("cseworld", $connection); // Selecting Database from Server
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
	$Insert Algorithm = $_POST['Insert Algorithm'];
	$Insert Book/any pdf = $_POST['Insert Book/any pdf'];
	$Insert Code = $_POST['Insert Code'];
	if($Insert Algorithm !=''&&$Insert Book/any pdf !='' &&$Insert Book/any pdf !='' Insert Code)
	{
	//Insert Query of SQL

		if($Insert Algorithm==$Insert Book/any pdf==$Insert Code)
		{ 
			$query = mysql_query("insert into CPANEL(Insert Algorithm,Insert Book/any pdf,Insert Code)  values('$Insert Algorithm', '$Insert Book/any pdf', '$Insert Code')");
			echo "<br/><br/><span>Data Inserted successfully...!!</span>";
		}

		else
		{
			echo "<br/><br/><span>Password Mismatch</span>";
		}
	}
	else
	{
		echo "<h1>Insertion Failed <br/> Some Fields are Blank....!!</h1>";
	}
}
mysql_close($connection); // Closing Connection with Server
?>