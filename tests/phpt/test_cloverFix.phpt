--TEST--
cloverFix check result matches manually fixed result
--FILE--
<?php
require_once  dirName(__FILE__).'/../../src/cloverFix.php';
$file = dirName(__FILE__).'/../resources/clover.BAD.xml';
$manuallyFixedFile = dirName(__FILE__).'/../resources/clover.GOOD.xml';
$fixed = cloverFix($file);
$manuallyFixed = file_get_contents($manuallyFixedFile);
//file_put_contents(dirName(__FILE__).'/../resources/clover.generated.xml', $fixed);
if (str_replace("\r",'',$fixed) != str_replace("\r",'',$manuallyFixed)) {
	echo('Failed cloverFix check');
}
else echo('Survived cloverFix check');
?>
--EXPECT--
Survived cloverFix check
