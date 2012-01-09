<?php

require_once dirName(__FILE__).'/../../src/cloverFix.php';

class CloverFixTest extends PHPUnit_Framework_TestCase
{
	public function testCloverFixFileName()
	{

		$input = 'C:\Program Files (x86)\Jenkins\jobs\someJobName\workspace\src/controller/BankAccountController.php';
		$ok = 'C:\Program Files (x86)\Jenkins\jobs\someJobName\workspace\src\controller\BankAccountController.php';
		
		$this->AssertEquals(cloverFixFileName($input),$ok);
	}


	public function testCloverFix()
	{
		$file = dirName(__FILE__).'/../resources/clover.BAD.xml';
		$manuallyFixedFile = dirName(__FILE__).'/../resources/clover.GOOD.xml';
		
		$fixed = cloverFix($file);	
		$manuallyFixed = file_get_contents($manuallyFixedFile);

		$this->assertEquals(str_replace("\r", '',$fixed), str_replace("\r", '', $manuallyFixed));
    	}
}
?>
