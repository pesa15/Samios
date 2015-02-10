<?php 
/**
 * This is a Samios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $samios variable
// with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Samios container.
$samios['title'] = "404";
$samios['header'] = "";
$samios['main'] = "This is a Samios 404(Peter). Document is not here.";
$samios['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Samios.
include(SAMIOS_THEME_PATH);