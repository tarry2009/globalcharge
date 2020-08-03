<?php

declare(strict_types=1);
final class functions
{ 

	/*
	Function get number and return string when
	   - multiples of three print Coke instead of the number
	   - the multiples of five print Fanta instead of the number
	   - numbers which are multiples of both three and five print CokeFanta instead of the number
	* */

	function returnCokeFanta($number=1) {
		
		if(($number % 3)==0 && ($number % 5)==0)
			return 'CokeFanta';
			
		if(($number % 3)==0)
			return 'Coke';
			
		if(($number % 5)==0)
			return 'Fanta';
		
		return $number;
	}
}
 
