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
		// test to Ignore numbers above 1000
		return [
			[
				[
					'calculator.php',
					'add',
					'10,20,1010,20',
				],
				50,
			]
		];
	}
}
?>