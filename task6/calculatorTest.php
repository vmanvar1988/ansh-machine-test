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
		// Test to show the negative numbers in error message
		return [
			[
				[
					'calculator.php',
					'add',
					'\\,\\2,7,-3,5,-2',
				],
				"Negative numbers (-3,-2) not allowed.",
			]
		];
	}
}
?>