<?php

        //set up a filter to find out what video to play:

    $videoFile = basename($_SERVER["SCRIPT_FILENAME"]);

        //this will determine which video background will load for this page:
/*if($filename=="index.php")
{
    $array = array(
                    "Waves",
    );


    //for each mp4, loop through and display html code for each mp4:
    foreach (glob("*.mp4") as $filename)
    {
        echo '
        <fieldset>
            <legend>'; echo $filename; echo ':</legend>

            <video width="569" height="240" controls loop>
                <source src="';	echo $filename;	echo '" type="video/mp4">
                    Your browser does not support the video tag.
            </video>

        </fieldset>

';
    }	//end foreach*/

    $video="";
    if ($videoFile=="index.php")
        $video = 'Waves';
    else if($videoFile=="home.php")
        $video = 'Flags';
    else if ($videoFile=="contact.php")
        $video = "WhiteRoom";
    echo '
        <div class="background">
		
			<video autoplay loop poster="vid/'; echo $video; echo'.jpg">
				<source src="vid/'; echo $video; echo'.webm" type="video/webm"/>
				<source src="vid/'; echo $video; echo'.mp4" type="video/mp4"/>
			</video>

		</div>
    ';
