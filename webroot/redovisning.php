<?php 
/**
 * This is a Samios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $samios
// variable with its defaults.
include(__DIR__.'/config.php'); 
 
// Do it and store it all in variables in the Samios container.
$samios['title'] = "Min redovisning";
 
$samios['header'] = <<<EOD
<img class='sitelogo' src='img/samios.png' alt='Samios Logo'/>
<span class='sitetitle'>Me oophp</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och
Objektorienterard PHP-programmering</span>
EOD;
 
$samios['main'] = <<<EOD
<h1>Redovisning av kursmomentet</h1>
<p>Hemma har jag Windows XP medan på jobbet använder jag Windows 7. På jobbet
använder jag jEdit eller Free JavaScript editor (kan validera JavaScript kod). 
Hemma är det Dreamweaver CS5 som gäller. På båda ställen
använder jag Firefox som webbläsare.</p>
<p>Den nya versionen av FileZilla kan inte köras i XP och därför använder jag
hemma WinSCP som ftp klient.
På jobbet använder jag FileZilla som ftp-klient.</p>
<p>Guiden 20 steg var bra men jag kan redan det som tas upp där eftersom det
är sådant jag tar upp när jag undervisar i PHP.</p>
<p>Jag har döpt om Anax till Samios som var mitt smeknamn när jag gick
i skola i Grekland.</p>
<p>Jag hade lagt \$anax = array(); efter \$anax['modernizr'] = 
'js/modernizr.js'; vilket förstås orsakade problem. Innan jag hade flyttat 
bilden samios.png till rätt plats såg inte designen bra ut.
<p>När det gäller Create a dynamicmenu har man glömt att skriva return \$html;
i avsnittet Styling the menu.</p> 
<p>När jag la in i config.php koden som var relaterad med navbar så fick jag
följande felmeddelande: </p>
<p>Fatal error: Call to undefined function get_navbar() in 
/home/saxon/students/20151/pesa15/www/oophp/Samios/theme/index.tpl.php on line
17 </p>
<p>Detta fel berodde på att jag hade glömt att definiera funktionen get_navbar
i functions.php.</p>
<p>Jag hade svårt att få menyn att hamna horisontellt och till slut såg jag 
från lärarens exempel att style.css importerade links.css och då löstes 
problemet.</P>
<p>Unicorn var något nytt för mig och jag har sett till att alla tre sidor
klarar av Unicorn valideringen.</p>

EOD;
 
$samios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Peter Samiotakis
(peter.samiotakis@hotmail.com) 
| <a href='https://github.com/pesa15/Samios'>Samios på GitHub</a> |
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>
Unicorn</a></span></footer>
EOD;
 
// Finally, leave it all to the rendering phase of Samios.
include(SAMIOS_THEME_PATH);