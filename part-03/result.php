<?php

	include 'quiz.php';

	
	$current_question = (int)$_GET["current_question"];
	$current_score = (int)$_GET["current_score"];

	if ($_GET["answer"] == $answers[$current_question]) {
		$current_score += 1;
	}

	$current_question += 1;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="final-result">
		<?php 
			echo "You've finished the quiz! Your final score is " . $current_score . " out of 5.";
		?>
	</div>


</body>
</html>
