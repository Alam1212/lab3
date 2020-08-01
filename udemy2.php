<?php
    // udemy.php

    $nav = [   // key is to be "readable" and is what is shown in the navbar, "value" is what gets called
        'Math' => 'math',
      	'JS' => 'JS',
      	'HTML' => 'HTML',
    ];

	$content = [
        'math' => [
          "header" => "<h1>Classes stsrting soon</h1>",
          "body" => "<img src='math1.jpeg' alt='Math'>"
          
        ],
      	'JS' => [
          "header" => "<h1>How to master Jsva</h1>",
          "body" => "<img src='index.jpeg' alt='JS'>"
        ],
      	'HTML' => [
          "header" => "<h1>Learn html</h1>",
          "body" => "<img src='htl.png' alt='HTML'>"
        ],
    ];

    if (isset($_GET['content'])) {
      	$theKey = $_GET['content'];
    } else {
      	$theKey = 'math';
    }

    $currentPage = $_SERVER['SCRIPT_NAME'];
    //$udemyList = '';

	$navList = "";
    foreach ($nav as $key => $value) {
        
        $navList .= '<li><a href="' . $currentPage . '?content=' . $value . '">'. $key . '</a></li>';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>udemy</title>
    <link rel="stylesheet" type="text/css" href="style.css">
	

  </head>
<body>
      <h1>Navigation Bar</h1>
      <ul><?php print $navList; ?></ul>
     
  	<hr>
  
    <?php 
 	  print $content[$theKey]['header']; 
  	print $content[$theKey]['body']; 
  	?>
 
  </body>
</html>