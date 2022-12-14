<!doctype html>

<?php include "partials/di-page-top-comments.php";?>

<?php
    date_default_timezone_set('Asia/Kolkata');
?>
<html>
    
    <head>
<?php include "partials/di-head-section.php";?>
        <title>Website Development - DigitallyInked / Saptarshi Chakraborty</title>
    </head>
    
    <body class="di-site web-dev">
        <div class="background">
        </div>
<?php include "partials/di-header.php";?>
        <div class="about-logos container-fluid">
            <ul class="logos">
                <li class="first"><i class="fa fa-html5"></i></li>
                <li class="second"><i class="fa fa-css3"></i></li>
                <li class="third"><i class="fa fa-globe"></i></li>
                <li class="fourth"><i class="fa fa-joomla"></i></li>
                <li class="fifth"><i class="fa fa-code"></i></li>
            </ul>
        </div>
        
        <div class="main-content web-dev-text container">
            <div class="web-dev-text-border">
                <h2>Website Development<span title="Hovering over random symbols is the first sign of insanity." class="fa fa-code"></span></h2>
                <p>Welcome to the website development showcase section. Below you will find a list of sites that I have developed along with some details of what technologies that I have used to make them.</p>
                <p>Please note that not all sites are still active.</p>
                <p>Most of the websites here have been made using Joomla, with a few exceptions.</p>
                <p>Feel free to reach out to me to talk about your own site, if you need one. I’m always available.</p>
            </div>
        </div>
        
        <div class="website-work-wrapper container" id="web-dev-showcase">
            <?php

                $path = "content/website-development/";

                $folderArray = array_reverse(array_values(array_diff(scandir($path), array('..','.'))));

                foreach($folderArray as $folder)
                {
                    $folderName = $path.$folder.'/';

                    $filesList = array_values(array_diff(scandir($folderName), array('..','.')));
                    
                    $fileHandle = fopen($folderName.$filesList[0],"r");
                    
                    $authorName = fgets($fileHandle);
                    $businessName = fgets($fileHandle);
                    $clientName = fgets($fileHandle);
                    $url = fgets($fileHandle);
                    $technology = fgets($fileHandle);
                    $comments = fgets($fileHandle);
                    
                    fclose($fileHandle);
            ?>
            
            <div class="website-work row">
                <div class="website-work-border container-fluid">
                    <div class="website-work-image-wrapper col-sm-4">
                        <a href="<?php echo $folderName.$filesList[1]; ?>" title="<?php echo $clientName; ?> - Full View" data-featherlight="image">
                            <img class="img img-responsive" src="<?php echo $folderName.$filesList[2]; ?>" />
                        </a>
                    </div>
                    <div class="website-work-text-wrapper col-sm-8">
                        <h2><?php echo $clientName; ?></h2>
                        <p>Developed by: <span class="highlight"><?php echo $authorName; ?></span></p>
                        <p>Developed under: <span class="highlight"><?php echo $businessName; ?></span></p>
                        <p>Technologies used: <span class="highlight"><?php echo $technology; ?></span></p>
                        <?php if(!empty(trim($comments))) { ?><p>Comments: <span class="highlight"><?php echo $comments; ?></span></p><?php } ?>
                    </div>
                </div>
            </div>
            
            <?php        

                }

            ?>
        </div>
        
<?php include "partials/di-to-top.html";?>        
<?php include "partials/di-social-icons.php";?>        
<?php include "partials/di-footer-area.php";?>
<!--        Scripts Start       -->
<?php include "partials/di-page-end-scripts-load.php";?>

<!--        Scripts End         -->         
    </body>
    
</html>