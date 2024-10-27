<?php

if(isset($_POST['submit'])){
$voriprice = $_POST['voriprice'];
$voriquantity = $_POST['voriquantity'];
$anaquantity = $_POST['anaquantity'];
$rotiquantity = $_POST['rotiquantity'];
$pointquantity = $_POST['pointquantity'];
$submit = $_POST['submit'];
$anaprice = $voriprice/16;
$rotiprice = $anaprice/6;
$pointprice= $rotiprice/10;
$result = ($voriprice*$voriquantity)+($anaprice*$anaquantity)+($rotiprice*$rotiquantity)+($pointprice*$pointquantity)." BDT";
}


?>