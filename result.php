<?php
require_once('common.php');

$qed= $_GET['qed'];
$answer= $_GET['answer'];

if($question[$qed][1]==$answer){
    echo "Correct!";
}else{
    echo "Incorrect...";
}