<?php
include_once('calculator.php');

use PHPUnit\Framework\TestCase;

/**
 * Class CalculatorTest
 */
class CalculatorTest extends TestCase
{
	/**
	 * @dataProvider addDataProvider
	 */
	public function testCalculate($input, $expected)
	{
		$calObj      = new calculator($input);
		$finalResult = $calObj->calculate();
		$this->assertEquals($expected, $finalResult);
	}

	/**
	 * Data provider for testCalculate
	 * @return array
	 */
	public function addDataProvider()
	{
		// test to \n as number separator
		return [
			[
				[
					'calculator.php',
					'add',
					'2\n3,4',
				],
				9,
			]
		];
	}
}
?>