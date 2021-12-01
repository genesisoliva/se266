<?php
	if (isset($_GET['lang'])) 
	{
		if ($_GET['lang'] == 'en') 
		{
			$_SESSION['lang'] = 0;
			$selectedLang = "en";
		}
                elseif($_GET['lang'] == 'es') 
		{
			$_SESSION['lang'] = 2;
			$selectedLang = "es";
		}
		else 
		{
			$_SESSION['lang'] = 1;
			$selectedLang = "ar";
		}
	}
	else 
	{
		$_SESSION['lang'] = 0;
		$selectedLang = "en";
	}
