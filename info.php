<?php
        //this will grab the filename of whatever file ran this:
    $filename = basename($_SERVER["SCRIPT_FILENAME"]);

        //this will set up variables for the page names:
    $home = "home.php";
    $skills = "skills.php";
    $goals = "goals.php";
    $resume = "resume.php";
    $contact = "contact.php";
    $cssFile= "";


        //this will determine the additional CSS file to use for this page:
    if($filename==$home)
        $cssFile= '<link href="css/home.css" rel="stylesheet" type="text/css" />';
    else if($filename==$skills)
        $cssFile= '<link href="css/skills.css" rel="stylesheet" type="text/css" />';
    else if($filename==$goals)
        $cssFile= '<link href="css/goals.css" rel="stylesheet" type="text/css" />';
    else if($filename==$resume)
        $cssFile= '<link href="css/resume.css" rel="stylesheet" type="text/css" />';
    else if($filename==$contact)
        $cssFile= '<link href="css/contact.css" rel="stylesheet" type="text/css" />';
    else
        $cssFile= '<link href="css/index.css" rel="stylesheet" type="text/css" />';


        //this will grab the current server date and time:
    $time = date("d-m-Y (D) H:i:s", time());



    //this file handles building <head> information:
echo '      <!-- INFO -->
        <!--		
		Tim Andrew\'s Portolio - www.TimAndrew.ca
		+++++++++++++++++++++++++++++++++++++++++
		Filename:	';echo $filename; echo '

		Created:    ';echo $time; echo ' (GMT)
		Original:	20-12-2016 (Tue) 00:32:38 (GMT)

		Author: 	Tim Andrew
	    -->
	    	';
echo'
	    <meta charset="UTF-8" />
	    
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		
		<meta name="author" content="Tim Andrew" />

		<meta name="description" content="Tim Andrew\'s Portfolio 
		                                  - An IT Professional, Developer, Designer & Animator - 
		                                  Located in Halifax, Nova Scotia, Canada." />

		<meta name="keywords" content="Tim Andrew,Portfolio,NSCC,C++,C#,Python,Java,Android,XAML,HTML5,CSS3,PHP,JavaScript,
									   AJAX,JSON,SQL,ORACLE,MySqL,SQLite,A+,NET+,NETWORK+,LINUX+,Technician,Programmer,
									   Blender,artist,3D,Animator." />	
		                                                      
			<!-- CSS -->
		<link href="css/styles.css" rel="stylesheet" type="text/css" />
		'; echo $cssFile; echo '

		    <!-- JS -->
		<script src="js/modernizr-1.5.js"></script>
';
?>