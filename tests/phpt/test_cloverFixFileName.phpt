--TEST--
cloverFixFileName check result matches manually fixed result
--FILE--
<?php
require_once  dirName(__FILE__).'/../../src/cloverFix.php';
$input = 'C:\Program Files (x86)\Jenkins\jobs\someJobName\workspace\src/controller/BankAccountController.php';
$ok = 'C:\Program Files (x86)\Jenkins\jobs\someJobName\workspace\src\controller\BankAccountController.php';

$output = cloverFixFileName($input);

if ($output !== $ok) {
	echo('Failed cloverFixFileName check');
}
else echo('Survived cloverFixFileName check');
?>
--EXPECT--
Survived cloverFixFileName check
