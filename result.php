<?php
require_once('common.php');

$qed=isset ($_GET['qed'])?$_GET['qed']:-1;
$answer= $_GET['answer'];
//Validation
if($qed== -1 || !is_numeric($qed)|| !((0<=$qed)&&($qed<count($question))) ){
    echo 'Error: $qed invalid';
    exit(1);
}

if($question[$qed][1]==$answer){
    echo "Correct!";
}else{
    echo "Incorrect...";
}