<?php 
/**
 * This is a Samios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $samios
// variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Samios container.
$samios['title'] = "Hello World";
 
$samios['header'] = <<<EOD
<img class='sitelogo' src='img/samios.png' alt='Samios Logo'/>
<span class='sitetitle'>Samios webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med
PHP</span>
EOD;
 
$samios['main'] = <<<EOD
<h1>Hej Världen</h1>
<p>Detta är en exempelsida som visar hur Samios ser ut och fungerar.</p>
EOD;
 
$samios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Peter Samiotakis
(peter.samiotakis@hotmail.com) 
| <a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> |
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>
Unicorn</a></span></footer>
EOD;
 
 
// Finally, leave it all to the rendering phase of Samios.
include(SAMIOS_THEME_PATH);

// Add js/main.js for inklusion
$samios['javascript_include'][] = 'js/main.js';
$samios['javascript_include'][] = 'js/other.js';