<?php 

	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name'];
	$age = $_GET['age'];
	if (empty($age) || empty($first_name) || empty($last_name))
	{
		include('errorMessage.php');
		exit();
	}
	if ($age > 18) 
		{
			$message = "I am old enough to vote in the United States.";
		}
	else
		{
			$message = "I am not old enough to vote in the United States.";
		}
	$days = $age * 365;
?>
<!DOCTYPE html>
<html>
	<header>
		<h3> Today's Date is  <?php echo date("m/d/y") ?> </h3>
	</header>
	<head>
		<title>Name</title>
		<link rel="stylesheet" href="main.css">
	</head>
	<body>
		<h2>Hello, my name is <?php echo $first_name; ?> <?php echo $last_name; ?></h2>
		<p> I am <?php echo $age; ?> years old, and <?php echo $message; ?></p>
		<p> That means I'm at least <?php echo $days; ?> days old!</p>
	</body>
	</html>