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

	public function addDataProvider()
	{
		// test to add capability of handling multiple numbers
		return [
			[
				[
					'calculator.php',
					'sum',
					'2,3',
				],
				5,
			],
			[
				[
					'calculator.php',
					'sum',
					'1',
				],
				1,
			],
			[
				[
					'calculator.php',
					'sum',
					'',
				],
				0,
			],
		];
	}
}
?>