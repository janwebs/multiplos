<?php
/*************************************************************************************/
/* Developer: Janluis Alarcon Marcano | janluisalarcon@gmail.com | +56 9 7922 4585   */
/* Date: March 10th 2020                                                             */
/* Description: This program prints all numbers from 1 to 100, however,              */
/*              - For multiples of 3, instead of the number, print 'Linio'.          */
/*              - For multiples of 5 print 'IT'.                                     */
/*              - For numbers which are multiples of both 3 and 5, print 'Linianos'. */
/*************************************************************************************/
function print_numbers()
{
	echo "Hello!!!\n";
	echo "\n";
	echo "This program prints all numbers from 1 to 100, however, \n";
	echo "- For multiples of 3, instead of the number, print 'Linio'. \n";
	echo "- For multiples of 5 print 'IT'.\n";
	echo "- For numbers which are multiples of both 3 and 5, print 'Linianos'.\n";
	echo "\n";
	$limit=100;
	for($i = 1; $i <= $limit; $i++) 
	{
		$number = $i;
		$x = $i % 3;
		switch($x)
		{
			case 0:
				$number = "Linio";
			break;
		}
		$y = $i % 5;
		switch($y)
		{
			case 0:
				$number = "IT";
			break;
		}
		switch($i)
		{
			case ( ($i % 3 == 0 ) && ($i % 5 == 0) ):
				$number = "Linianos";
		}
		echo $number."\n";
		//echo $i.") ".$i." % 3 = ".$x." /// ".$i." % 5 = ".$y." /// ".$number."<br>";
	}
}

print_numbers();

?>