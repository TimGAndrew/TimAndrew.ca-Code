<?php


$pageName = basename($_SERVER["SCRIPT_FILENAME"]);
$home = "home.php";
$skills = "skills.php";
$goals = "goals.php";
$resume = "resume.php";
$contact = "contact.php";


echo '<header>
        
            <a href="index.php"><img class="avatar" src="img/Tim.png" alt="Tim" /></a>

			<h2>Tim Andrew<br/><span>IT Professional, Developer, Designer & Animator</span></h2>

			<nav>

				<ul>';
		//the following is to show all links:
echo '
					<a href="home.php"><li>Home</li></a>
					<a href="skills.php"><li>Skills</li></a>
					<a href="goals.php"><li>Goals</li></a>
					<a href="resume.php"><li>Résumé</li></a>
					<a href="contact.php"><li>Contact</li></a>

					';
        /*Alternatively this will display links based on what this page is:
    if ($pageName!=$home)
    {
        echo '<a href="home.php"><li>Home</li></a>
					';
    }
    if ($pageName!=$skills)
    {
        echo '<a href="skills.php"><li>Skills</li></a>
					';
    }
    if ($pageName!=$goals)
    {
        echo '<a href="goals.php"><li>Goals</li></a>
					';
    }
    if ($pageName!=$resume)
    {
        echo '<a href="resume.php"><li>Résumé</li></a>
					';
    }
    if ($pageName!=$contact)
    {
        echo '<a href="contact.php"><li>Contact</li></a>
					';
    }*/
echo '
				</ul>

			</nav>
			
	    </header>
			
        <nav class="pageTitle">
                 
            ';
				//the following will determine what the page title is:
    if($pageName==$home)
    {
        echo '<h2>Home</h2>';
    }
    else if($pageName==$skills)
    {
        echo '<h2>Skills</h2>';
    }
    else if($pageName==$goals)
    {
        echo '<h2>Goals</h2>';
    }
    else if($pageName==$resume)
    {
        echo '<h2>Résumé</h2>';
    }
    else if($pageName==$contact)
    {
        echo '<h2>Contact</h2>';
    }
    else
    {
        echo '<h2>'; echo $pageName; echo '</h2>';
    }

echo '

       </nav>
';
