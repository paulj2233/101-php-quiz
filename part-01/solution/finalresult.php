<?php

	include 'quiz.php';

	$current_score = $_GET["current_score"];

	if ($_GET["answer"] == $answers[3]) {
		$current_score += 1;
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="final-result">
		You've finished the quiz! Your final score is <?php echo $current_score ; ?> out of 4.
	</div>


</body>
</html>
