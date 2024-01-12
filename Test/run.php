<?php

require_once "Test1/test.php";
require_once "Test2/test.php";

$obj= new Test1\Test();
$obj= new Test2\Test();

use Test1\Test as Test1;
$obj1= new Test1;
use Test2\Test as Test2;
$obj2= new Test2;
?>                                                                                  