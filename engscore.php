<DOCTYPE html>

<html>

	<head>
		<title>Yoga Card Quiz - Scores</title>
		
		<div id="header">
		
			<h1 align="center">Yoga Card Quiz</h1>
		</div>

		<h2 align="center">Score Page</h2>

		<style type="text/css">

			body	{
				font-family:Arial;
				background-color:rgb(0,0,0);
				background-image:url(bgpic.jpg);
				background-position:top left;
				background-repeat:repeat;
				background-attachment:fixed;
				}

			#header	{
				background-color:#ffcccc;
				border:1px solid black;
				width:100%;
				}

			footer	{
				position:relative;
				bottom:0px;
				background-color:#ffcccc;
				border:1px solid black;
				width:100%;
				}			

		</style>

	</head>

	<body>

		<br>
		

		<?php
		
			$name = $_POST['nameIn'];
			
			
			
    
		    $answer1 = $_POST['question-1-answers'];
		    $answer2 = $_POST['question-2-answers'];
		    $answer3 = $_POST['question-3-answers'];
		    $answer4 = $_POST['question-4-answers'];
		    $answer5 = $_POST['question-5-answers'];

		    $totalCorrect = 0;
		    
		    if ($answer1 == "A") { $totalCorrect++; }
		    if ($answer2 == "B") { $totalCorrect++; }
		    if ($answer3 == "C") { $totalCorrect++; }
		    if ($answer4 == "D") { $totalCorrect++; }
		    if ($answer5 == "A") { $totalCorrect++; }
		    
		    echo "<div id='results' align='center'><h2>$name<br><br><br>You have correctly answered <br> $totalCorrect / 5 <br>english names for yoga positions</h2></div>";
		  
			$servername = "localhost";
			$username = "se215070";
			$password = "123456";
			$dbname = "yogadb";
			
			$t=time();
			
			try {
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO yogaTable (Name, Score, Date)
			VALUES ('$name', '$totalCorrect/5', '$t')";
			// use exec() because no results are returned
			$conn->exec($sql);
			}
			catch(PDOException $e)
			{
			echo $sql . "<br>" . $e->getMessage();
			}

			$conn = null;
			
		?>

		<br>
		

		<div id="backLink" align="center">

			<a href="engquiz1.php">Attempt quiz again!</a>

		</div>

		<br>
		<p align="center"> or </p>
		<br>

		<div id="home" align="center">

			<a href="home.php">Return to language choice selection page</a>

		</div>
		
		<br>
		<br>

	</body>

<footer align="center">

	<div id="footer" align="center">

		<p>Many thanks to our friends at <a href="http://yogacards.com">www.yogacards.com</a> for permitting us to use thier images.(2016)</p>

	</div>

</footer>

</html>
