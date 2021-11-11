<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="robots" content="index, follow">
    
    <?php
        $ROOT_DIRECTORY = "php-magic-linking";      

        ini_set('error_reporting', E_ALL); 

        $domain = "http://";
        if (isset($_SERVER['HTTPS'])) {
            if ($_SERVER['HTTPS']) {
                $domain = "https://";
            }
        }
        
        $server = htmlentities($_SERVER['SERVER_NAME'], ENT_QUOTES, "UTF-8");
        $domain .= $server;     
        
        $phpSelf = htmlentities($_SERVER['PHP_SELF'], ENT_QUOTES, "UTF-8");     

        $path_parts = pathinfo($phpSelf);
        
        
        $split_url = explode('/', $path_parts['dirname']);  //split string of directories at each / character
        
        $baseLevelIndex = 0;        //used to find the "base directory" in the url. If the site's home is in "topLevel/level1/level2/ROOT_SITE_FOLDER_HERE" then it's 3 folders down, so everything should relate the the url array from index 3. We iterate through the URL array to find the $ROOT_FOLDER, then adjust and make a new array
        for ($i = 0; $i < count($split_url); $i++){     //loop through the URL
            if ($split_url[$i] == $ROOT_DIRECTORY){     //SUPER IMPORTANT ($ROOT_DIRECTORY must match the BASE folder that the site lives inside)
                $baseLevelIndex = $i;
                 break;    //This stops when the 1st occurence of $ROOT_DIRECTORY is found. COMMENT OUT OR REMOVE THIS  break;  if your actual root directory has a parent folder with the exat same name ()
            }
        }
        $folderCountRaw = count($split_url); //this gives an int of how many folders are in the URL
    	$folderCount = $folderCountRaw - $baseLevelIndex - 1; //subtract $baseLevelIndex to get the base directory (no matter how deep the file structure, this resets it to a base folder. Then subtract 1 to make the "home" directory be 0 folders up from anything
        //0 means the homepage, 1 means top level pages (file is located in 1 folder below $ROOT_DIRECTORY), 2 means 2 levels down, etc.
	
        $split_url_adjusted = $split_url;       //array to hold the URL parts AFTER the $ROOT_DIRECTORY (remove any directories ABOVE $ROOT_DIRECTORY)
        for($i = 0; $i< ($folderCountRaw - $folderCount -1); $i++){   //remove the beginning indices of the array (anything before $ROOT_DIRETORY)
            unset($split_url_adjusted[$i]);     //actually remove the element, but the indices will be messed up
        }
        $split_url_adjusted= array_values($split_url_adjusted);     //array_values re-indexes the array. Now this contains a list folderis in the the URL including & AFTER the $ROOT_DIRECTORY
        
        $containing_folder =  $split_url_adjusted[count($split_url_adjusted) -1] ; //IMPORTANT this gets the very last folder in the $split_url_adjusted array (the very last index of an array is 1 less than its size, hence: count($split_url_adjusted) -1 ). This folder "contains" the current page file. Used almost everywhere to tell what page I'm on since all my pages are called 'index.php' but have unique cotaining-folder names
        if($folderCount == 0){      //special case for the homepage. Since its actual containing folder is the contents of $ROOT_DIRECTORY, it must be overridden to equal "index". This is to avoid confusion if $ROOT_DIRECTOY is NOT a a good name for the site. This disregards where the site is located & just make the homepage's containing folder = "index". ALSO USED TO PRINT ID'S IN THE BODY TAG FOR EACH PAGE
            $containing_folder = 'index';
        }
    	$fileName = $path_parts['filename'];		//not used much, but just in case
        $dirName = $path_parts['dirname'];          //the url of folders (excluding filename). Not used much
	

        $upFolderPlaceholder='';                //initialize to empty string (assume it's at the highest folder level)
        for($i=0; $i<$folderCount; $i++){
            $upFolderPlaceholder.='../';      //append ../ for how many levels the currrent folder is below the root
        }

        $debug = false;  //Localhost says error if not define here, hope it doesn't hurt
        if ($debug) {
            print "<p>Domain" . $domain;
            print "<p>php Self" . $phpSelf;
            print "<p>Path Parts<pre>";
            print_r($path_parts);
            print "</pre>";
        }
   
        function convFolder2PgTitle($folder2Convert){       //function takes in a string (folder name) & makes it more readable. 
            $pgTitleOutput = str_replace("-" , " / ", $folder2Convert);     //replace dashes with slashes and spaces
            $pgTitleOutput = str_replace("_" , " ", $pgTitleOutput);        //replace underscores with spaces (multi-word title)
            return ucwords($pgTitleOutput);                                 //capitalize 1st letter of each word
        }
        $pageTitle = convFolder2PgTitle($containing_folder);    //This is basiaclly the "Page Name". Can easily be added to all <title> tags & printed as the 1st <h1> on pages. ALL BASED ON CONTAINING FOLDER
        if ($folderCount == 0) {    //if it's the homepage, hardcode it instead of the base folder where the site's located
            $pageTitle = "Home";
        }
        
        $tagLine = " - Genesis J. Oliva";
    ?>
    
    <title><?php echo $pageTitle.$tagLine ; ?></title>
    <?php       
        $pageArrayTop = array($ROOT_DIRECTORY, 'assignments', 'php-resources', 'heroku-resources', 'git-resources', 'resources');   //make a list of the ALL pages
        $pageArrayDropDown1 = array ('week1', 'week2', 'week3', 'week4', 'week5', 'week6', 'week7', 'week8', 'week9', 'week10', 'tasks');     //1st level of dropdown
        $pageArrayDropDown2 = array ('task_c', 'task_d', 'task_e', 'task_f', 'task_g', 'patient_intake_form', 'simulate_an_atm', 'patient_ehr_vew_add', 'patient_ehr_crud', 'School_Reference_Database', 'Patient_Search', 'example_8', 'example_9', 'example_10');
        $activePageArrayTop = array_fill_keys($pageArrayTop, '');
        $activePageArrayDropDown1 = array_fill_keys($pageArrayDropDown1, '');
        $activePageArrayDropDown2 = array_fill_keys($pageArrayDropDown2, '');

        function fillActivePageArrays(&$arrayOfPages, &$activeArrayToFill, $split_url_adjusted2, $folderLevelToCheck){  //use & to pass arrays BY REFERENCE
            for($i = 0; $i < count($arrayOfPages); $i++){      //loop through the page array that was passed in
                if($split_url_adjusted2[$folderLevelToCheck] == $arrayOfPages[$i]){   //if a folder of the URL matches the key stored in the page Array
                    $activeArrayToFill[ $split_url_adjusted2[$folderLevelToCheck] ]= "activePage";     //print "activePage" in the $activeArrayToFill, at the index of "$folderLevelToCheck"
                    break;      //break out of the loop when it finds an active page. (Avoids 2 pages on the same folder level both being "active")
                }
            }   //at this point, $activeArrayToFill should have '' stored in all indecies & 'activePage' in 1 place
        }
        
        if($folderCount == 0){      //special case for the homepage. Since it's in $ROOT_DIRETORY, it's essentialy 0 folders down from itself
            $activePageArrayTop[$ROOT_DIRECTORY] = 'activePage';
        }
        if($folderCount >= 1){
            fillActivePageArrays($pageArrayTop, $activePageArrayTop, $split_url_adjusted, 1);
        }
        if($folderCount >= 2){
            fillActivePageArrays($pageArrayDropDown1, $activePageArrayDropDown1, $split_url_adjusted, 2);
        }
        if($folderCount >= 3){
            fillActivePageArrays($pageArrayDropDown2, $activePageArrayDropDown2, $split_url_adjusted, 3);
        } 
    ?>
        
    <?php   
        $pagesArrayAll = array_merge($pageArrayTop, $pageArrayDropDown1, $pageArrayDropDown2);      //list of all pages (folders on the entire site)
        $pageMeteDescriptions = array_fill_keys($pagesArrayAll, '');    //fill the array with empty descriptions in case the text file doesn't have them
        unset($pageMeteDescriptions[$ROOT_DIRECTORY]);      //the line abovve copied the value of $ROOT_DIRECTORY as the homepage description key, but we want to refer to it as "index" instead. So, remove this key & add a new blank one
        $pageMeteDescriptions['index'] = '';
        
        $descFile = fopen($upFolderPlaceholder."non-pages/descriptions/meta_descriptions.txt", "r");    //open the description file

        while( ($line = fgets($descFile)) !== false){  //read through file until reaches end, & copy each line to $line variable
            $line = explode(' ', $line, 2);     //Split @ 1st space. Now $line is an array until the end of the loop
            $arrayKey = $line[0];       //this is the 1st word, the folder name (or page name)
            $description = str_replace("\n", "", $line[1]);     //description is everything after the 1st word on the line. Also remove newline characters
            $pageMeteDescriptions[$arrayKey] = $description;    //FINALLY store the description in the array with corresponding key
        }
        fclose($descFile);
    ?>

    <meta name="author" content="Genesis J Oliva">
    <meta name="description" content="<?php echo $pageMeteDescriptions[$containing_folder] ?>">

    <link rel="icon" type="image/png" href="<?php echo $upFolderPlaceholder ?>images/0_components/favicon.png">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href='<?php echo $upFolderPlaceholder ?>non-pages/css/menu.css' rel='stylesheet' type='text/css' media='screen' />-->
    <link href='<?php echo $upFolderPlaceholder ?>non-pages/css/style.css' rel='stylesheet' type='text/css' media='screen' />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href='<?php echo $upFolderPlaceholder ?>non-pages/css/mega-menu.css' rel='stylesheet' type='text/css' media='screen' />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script href='<?php echo $upFolderPlaceholder ?>non-pages/javascript/script.js' type="text/javascript" >
    $(function(){
	$(".dropdown-menu > li > a.trigger").on("click",function(e){
		var current=$(this).next();
		var grandparent=$(this).parent().parent();
		if($(this).hasClass('left-caret')||$(this).hasClass('right-caret'))
			$(this).toggleClass('right-caret left-caret');
		grandparent.find('.left-caret').not(this).toggleClass('right-caret left-caret');
		grandparent.find(".sub-menu:visible").not(current).hide();
		current.toggle();
		e.stopPropagation();
	});
	$(".dropdown-menu > li > a:not(.trigger)").on("click",function(){
		var root=$(this).closest('.dropdown');
		root.find('.left-caret').toggleClass('right-caret left-caret');
		root.find('.sub-menu:visible').hide();
	});
});
    </script>
    </body>
</html>

</head>
<?php
    echo '<body id="'.$containing_folder.'">';
?>

    <?php
        include ($upFolderPlaceholder."non-pages/php-include/header.php");
        include ($upFolderPlaceholder."non-pages/php-include/breadcrumbs.php");
    ?>