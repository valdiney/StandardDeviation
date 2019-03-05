<?php 
require_once("src/StandardDeviation.php");

# Data set
$data = [1,2,3,4,7,8,10,5.5];

$standard = new Statistic\StandardDeviation();

# Inputting the data set
$standard->setRawGroup($data);

# Methods available to be used
var_dump($standard->variance());
var_dump($standard->deviation());
var_dump($standard->average());