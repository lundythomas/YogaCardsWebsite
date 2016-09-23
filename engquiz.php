<DOCTYPE html>

<?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg', 'bg-09.jpg', 'bg-10.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selected1 = "$bg[$i]"; // set variable equal to which random filename was chosen

$q = rand(0, count($bg)-1); // generate random number size of the array
  $selected2 = "$bg[$q]"; // set variable equal to which random filename was chosen

$w = rand(0, count($bg)-1); // generate random number size of the array
  $selected3 = "$bg[$w]"; // set variable equal to which random filename was chosen

$e = rand(0, count($bg)-1); // generate random number size of the array
  $selected4 = "$bg[$e]"; // set variable equal to which random filename was chosen

$r = rand(0, count($bg)-1); // generate random number size of the array
  $selected5 = "$bg[$r]"; // set variable equal to which random filename was chosen
?>

<html>
<head>

<title>Yoga Card Quiz</title>

<div id="header">
	<h1 align="center">Test your Yoga knowledge</h1>
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
	background-color:#ffcccc;
	border:1px solid black;
	width:100%;
	}

#q1	{
	background-image:url(<?php echo $selected1; ?>);
	width:250px;
	height:311px;
	}
#q2	{
	background-image:url(<?php echo $selected2; ?>);
	width:250px;
	height:311px;
	}
#q3	{
	background-image:url(<?php echo $selected3; ?>);
	width:250px;
	height:311px;
	}
#q4	{
	background-image:url(<?php echo $selected4; ?>);
	width:250px;
	height:311px;
	}
#q5	{
	background-image:url(<?php echo $selected5; ?>);
	width:250px;
	height:311px;
	}

</style>

</head>

<br>
<br>

<form action="engscore.php" method="post" id="quiz" align="center">

	<div align="center">

		<br>

		<div>
			 Name: <input type="text" name="nameIn" id="nameIn" />	
		</div>

		<br>
		<br>
		
		<h2 align="center">Please click on the English name for the following positions:</h3>

		<p><u>Question 1.</u></p>
		<div id="q1">
		
		</div>	
		<p><br></p>
		<div>
		    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
		    <label for="question-1-answers-A">A)Fish Pose (Variation) </label>
		</div>

		<div>
		    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
		    <label for="question-1-answers-B">B)Headstand</label>
		</div>

		<div>
		    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
		    <label for="question-1-answers-C">C)Heron Pose</label>
		</div>

		<div>
		    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
		    <label for="question-1-answers-D">D) None of the above</label>
		</div>
	<p><br></p>
	
	<p>-----------------------------------------------------------</P>
	</div>
	

	<div align="center">
		<p><u>Question 2.</u></p>

		<div id="q2">
		
		</div>
	
		<p><br></p>
		<div>
		    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
		    <label for="question-2-answers-A">A)Side Headstand </label>
		</div>

		<div>
		    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
		    <label for="question-2-answers-B">B)Ear Pressure Pose</label>
		</div>

		<div>
		    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
		    <label for="question-2-answers-C">C)Locust Pose</label>
		</div>

		<div>
		    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
		    <label for="question-2-answers-D">D) None of the above</label>
		</div>
	<p><br></p>
	
	<p>-----------------------------------------------------------</P>
	</div>
		

	<div align="center">
		<p><u>Question 3.</u></p>
		
		<div id="q3">
		
		</div>
			
		<p><br></p>
		<div>
		    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
		    <label for="question-3-answers-A">A) Sun Salutation </label>
		</div>

		<div>
		    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
		    <label for="question-3-answers-B">B)Reclining Hero Pose</label>
		</div>

		<div>
		    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
		    <label for="question-3-answers-C">C)Large Pit or Hollow</label>
		</div>

		<div>
		    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
		    <label for="question-3-answers-D">D) None of the above</label>
		</div>
	<p><br></p>
	
	<p>-----------------------------------------------------------</P>
	</div>
		
	
	<div align="center">
		<p><u>Question 4.</u></p>
		
		<div id="q4">
		
		</div>
			
		<p><br></p>
		<div>
		    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
		    <label for="question-4-answers-A">A)Warrior 3 </label>
		</div>

		<div>
		    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
		    <label for="question-4-answers-B">B)Fish Pose (Variation)</label>
		</div>

		<div>
		    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
		    <label for="question-4-answers-C">C)Ear Pressure Pose</label>
		</div>

		<div>
		    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
		    <label for="question-4-answers-D">D) None of the above</label>
		</div>
	<p><br></p>
	
	<p>-----------------------------------------------------------</P>
	</div>
	

	<div align="center">
		<p><u>Question 5.</u></p>
		
		<div id="q5">
		
		</div>
			
		<p><br></p>
		<div>
		    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
		    <label for="question-5-answers-A">A) Sun Saluation </label>
		</div>

		<div>
		    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
		    <label for="question-5-answers-B">B) Heron Pose</label>
		</div>

		<div>
		    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
		    <label for="question-5-answers-C">C)Headstand</label>
		</div>

		<div>
		    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
		    <label for="question-5-answers-D">D) None of the above</label>
		</div>
	<p><br></p>
	

	
	<p>-----------------------------------------------------------</P>

	</div>

	<div align="center">

		<p>End of Quiz</p>

		<input type="submit" value="Click here to submit your answers" />

	<p>-----------------------------------------------------------</P>

	</div>

</form>

<footer align="center">

	<div id="footer" align="center">

		<p>Many thanks to our friends at <a href="http://yogacards.com">www.yogacards.com</a> for permitting us to use thier images.(2016)</p>

	</div>

</footer>

</html>
