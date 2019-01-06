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
		return [
			// Test to multiply of 2 numbers
			[
				[
					'calculator.php',
					'multiply',
					'2,3',
				],
				6,
			],
			// Test to multiply numbers but ignore numbers above 1000
			[
				[
					'calculator.php',
					'multiply',
					'10,20,1010,20',
				],
				4000,
			],
			// Test to show the negative numbers in error message
			[
				[
					'calculator.php',
					'multiply',
					'\\,\\2,7,-3,5,-2',
				],
				"Negative numbers (-3,-2) not allowed.",
			],
			// Test to Support different delimiters
			[
				[
					'calculator.php',
					'multiply',
					'\\;\\3;4;5',
				],
				60,
			],
			// Test to check \n as number seperator
			[
				[
					'calculator.php',
					'multiply',
					'2\n3,4',
				],
				24,
			],
			// Test to skip the argument
			[
				[
					'calculator.php',
					'multiply',
					'',
				],
				1,
			],
			// Test to multiply of multiple numbers
			[
				[
					'calculator.php',
					'multiply',
					'2,3,4,5',
				],
				120,
			]
		];
	}
}
?>