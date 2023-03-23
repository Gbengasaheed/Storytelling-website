<?php

function check_login($con)
{
	if(isset($_SESSION['user_id'])) //check if the seesion exist
	{
		$id = $_SESSION['user_id'];
		$query = "select * from log where user_id = '$id' limit 1";

		$result = mysqli_query($con, $query);
		if($result && mysqli_num_rows($result) > 0)  //check if it's real
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}

	//redirect to login
	header("location: mylogin.php");
	die;

}

function random_num($length)
{
	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4, $length);

	for ($i=0; $i < $len; $i++){
		$text .= rand(0,9);
	}
	return $text;
}