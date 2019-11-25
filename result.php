<?php

require_once('common.php');



// 引数（クエリー）を受け取る

$qed    = isset($_GET['qed'])? $_GET['qed']:-1; 

$answer = $_GET['answer'];



// Validation

if($qed == -1 || !is_numeric($qed) || !((0<=$qed) && ($qed<count($question))) ){

	echo 'error: $qed invalid';

	exit(1);

}





// 正解か判定

if( $question[$qed][1] == $answer ){

	echo "正解！";

}

else{

	echo "残念！";

}