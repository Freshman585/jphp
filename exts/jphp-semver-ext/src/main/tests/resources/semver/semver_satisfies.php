--TEST--
SemVer satisfies
--FILE--
<?php

use semver\SemVersion;

$ver1 = new SemVersion('1.2.3');

var_dump(">=1.0.0 & <2.0.0", $ver1->satisfies('>=1.0.0 & <2.0.0'));
var_dump("1.2.*", $ver1->satisfies('1.2.*'));
var_dump("~1.2", $ver1->satisfies('~1.2'));
var_dump("~1.3", $ver1->satisfies('~1.3'));

?>
--EXPECT--
string(16) ">=1.0.0 & <2.0.0"
bool(true)
string(5) "1.2.*"
bool(true)
string(4) "~1.2"
bool(true)
string(4) "~1.3"
bool(false)