<?php

declare(strict_types=1);
require 'functions.php';

for($i=1; $i<=20; $i++) { 
	if(php_sapi_name() === 'cli') 
	   echo functions::returnCokeFanta($i)."\xA";
	else
	   echo nl2br(functions::returnCokeFanta($i)."\r\n");
}
