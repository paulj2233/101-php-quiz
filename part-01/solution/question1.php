<?php

	include 'quiz.php';

	$current_question = 0;
	$current_score = 0;

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="question-count">
		1 Question
	</div>	

	<div class="question-prompt">
		<?php echo $quiz[0]; ?>
	</div>

	<div class="answer">
		<form action="question2.php">
			<input type="radio" name="answer" value="A">A<br>
			<input type="radio" name="answer" value="B">B<br>
			<input type="radio" name="answer" value="C">C<br>
			<input type="radio" name="answer" value="D">D<br>
			<input type="hidden" name="current_question" value="<?php echo $current_question; ?>">
			<input type="hidden" name="current_score" value="<?php echo $current_score; ?>">
			<input type="submit" value="Next Question">
		</form>
	</div>

</body>
</html>