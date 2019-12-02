<?php
require_once('common.php');
$data    = getDB1('select max(id) as maxid from question');

$i = rand(1,$data['maxid']);
//問題の取得
$data = getDB1('select question from question where id=?'[$i]);

$param = ['text'=>$data['question'],'qed'=>$i];


echo json_encode($param);