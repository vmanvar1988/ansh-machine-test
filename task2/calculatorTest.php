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
					'add',
					'2,3',
				],
				5,
			],
			[
				[
					'calculator.php',
					'add',
					'1',
				],
				1,
			],
			[
				[
					'calculator.php',
					'add',
					'',
				],
				0,
			],
			[
				[
					'calculator.php',
					'add',
					'4,7,3,4,7,3,5,6,7,4,3,2,5,7,5,3,4,6,7,8,9,5,5,5,4,3,2',
				],
				133,
			],
		];
	}
}
?>