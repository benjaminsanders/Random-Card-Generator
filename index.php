<?php $suite=array("Diamonds","Clubs","Hearts","Spades"); $val=array("A","2","3","4","5","6","7","8","9","10","J","Q","K"); ?>
<link href="css/cards.css" type="text/css" rel="stylesheet">
<div><a href="/"><i class="card card-card<?=$suite[rand(0,3)].$val[rand(0,12)];?>"></i></a></div>