<?php

	include 'quiz.php';

	if (count($_GET) == 0) {
		$current_score = 0;
		$current_question = 0;
	} else {
		$current_question = (int)$_GET["current_question"];
		$current_score = (int)$_GET["current_score"];

		if ($_GET["answer"] == $answers[$current_question]) {
			$current_score += 1;
		}

		$current_question += 1;
	}



?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="feedback">
		Your current score is <?php echo $current_score; ?>
	</div>

	<div class="question">
		<?php
			echo $quiz[$current_question];
		?>
	</div>

	<div class="answer">
		<?php
			if ($current_question == (count($quiz) - 1)) {
				echo "<form action='result.php'>";
			} else {
				echo "<form>";
			}
		?>
			<input type="radio" name="answer" value="A">A<br>
			<input type="radio" name="answer" value="B">B<br>
			<input type="radio" name="answer" value="C">C<br>
			<input type="radio" name="answer" value="D">D<br>
			<input type="submit" value="Next Question">

			<input type="hidden" name="current_score" value="<?php echo $current_score ; ?>">
			<input type="hidden" name="current_question" value="<?php echo $current_question ; ?>">
		</form>
	</div>


</body>
</html>
