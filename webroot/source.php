<?php
/**
 * This is a Samios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $samios variable
// with its defaults.
include(__DIR__.'/config.php'); 

// Add style for csource
$samios['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 
// Do it and store it all in variables in the Samios container.
$samios['title'] = "Visa källkod";
$samios['main'] = "<h1>Visa källkod</h1>\n" . $source->View();


// Finally, leave it all to the rendering phase of Samios.
include(SAMIOS_THEME_PATH);