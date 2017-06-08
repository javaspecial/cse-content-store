<?php
$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
$db = mysql_select_db("cseworld", $connection); // Selecting Database from Server
if(isset($_POST['submit']))
{ // Fetching variables of the form which travels in URL
	$u_name = $_POST['u_name'];
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$session = $_POST['session'];
	$semester = $_POST['semester'];
	$password = $_POST['password'];
	$confirm_password = $_POST['confirm_password'];
	if($u_name !=''   &&   $f_name !=''   &&   $l_name !=''  &&  $session !=''  &&  $semester !=''   &&   $password !=''  &&   $confirm_password !='' )
	{
	//Insert Query of SQL

		if($password==$confirm_password)
		{ 
			$query = mysql_query("insert into create_account(u_name,f_name,l_name,session,semester,password,confirm_password)  values('$u_name', '$f_name', '$l_name', '$session', '$semester', '$password', '$confirm_password')");
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