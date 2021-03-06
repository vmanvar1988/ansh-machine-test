<?php
include_once('../calculation.php');

/**
 * Created by PhpStorm.
 * User: vaishali.m
 * Date: 04-01-2019
 * Time: 21:01
 */
class calculator implements calculation
{
	public $result;
	public $input;

	public function __construct($inputData)
	{
		$this->result = 0;
		$this->input  = $inputData;
	}

	/**
	 * function to calculate addition of numbers
	 *
	 * @return int
	 */
	public function calculate()
	{
		if (isset($this->input[1]) && $this->input[1] === 'add')
		{
			if (!empty($this->input[2]))
			{
				$inputStr = str_replace("\\", "", $this->input[2]);
				$ins      = explode(',', $inputStr);
				if (!empty($ins))
				{
					foreach ($ins as $val)
					{
						if (!empty($val))
						{
							if ($val < 0)
							{
								return "Negative numbers not allowed.";
							}
							$this->result += $val;
						}
					}
				}
			}
		}

		return $this->result;
	}
}

if(!empty($argv))
{
	$calObj      = new calculator($argv);
	$finalResult = $calObj->calculate();
	echo $finalResult;
}