<?php
require_once('common.php');

$i = rand(0,count($question)-1);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>QuizGame Question</title>
</head>
<body>
    <h1>Question</h1>
    <?= $question[$i][0] ?>

    <form action="result.php">
        <input type="hidden" name="qed" value="<?= $i ?>">
        <input type="text" name="answer">
        <button>answer</button>
    </form>
    
</body>


</html>