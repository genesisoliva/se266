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
		elseif($_GET['lang'] == 'pt')
		{
			$_SESSION['lang'] = 3;
			$selectedLang = "pt";
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
