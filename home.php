<DOCTYPE html>

<html>

<head>

<title>Yoga Card Quiz</title>

	<div id="header">
		<h1 align="center">Yoga Card Quiz</h1>
	</div>

	<br>
	<br>
	<br>

	<div>
		<h1 align="center">Please select which quiz you would like to try:</h1>
	</div>

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
		position:fixed;
		bottom:5px;
		background-color:#ffcccc;
		border:1px solid black;
		width:100%;
		}
	
	button {
	    	background-color: black;
	    	border: none;
	    	color: white;
	    	padding: 16px 32px;
	    	text-align: center;
	    	text-decoration: none;
	    	display: inline-block;
	    	font-size: 16px;
	    	margin: 4px 2px;
	    	
		}

	button:hover {
    		background-color: #4CAF50;
    		color: white;
			cursor:pointer;
		}

	</style>

</head>

<body>
	<br>
	<br>
	<br>
	
	

	<div id="englishbutton" align="center">

		<button onclick="window.location.href='engquiz.php'">English names for positions quiz</button>
	
	</div>

	<br>
	
	<p align="center">-----------------------------------------------------------</P>
	
	<br>

	<div id="sansbutton" align="center">

		<button onclick="window.location.href='sansquiz.php'">Sanskrit names for positions quiz</button>
	
	</div>

</body>

<footer align="center">

	<div id="footer" align="center">

		<p>Many thanks to our friends at <a href="http://yogacards.com">www.yogacards.com</a> for permitting us to use thier images.(2016)</p>

	</div>

</footer>

</html>
