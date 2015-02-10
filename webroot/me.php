<?php 
/**
 * This is a Samios pagecontroller.
 *
 */
// Include the essential config-file which also creates the $samios
// variable with its defaults.
include(__DIR__.'/config.php'); 
 
// Do it and store it all in variables in the Samios container.
$samios['title'] = "Om mig";
 
$samios['header'] = <<<EOD
<img class='sitelogo' src='img/samios.png' alt='Samios Logo'/>
<span class='sitetitle'>Me oophp</span>
<span class='siteslogan'>Min Me-sida i kursen Databaser och
Objektorienterard PHP-programmering</span>
EOD;
 
$samios['main'] = <<<EOD
<h1>Om mig ...</h1>
<p>Mitt namn är Peter Samiotakis och jag jobbar som gymnasielörare inom data
i Stockholm.
<p>Jag har jobbat sedan 1998 på S:t Eriks gymnasium och jag har en 
Lärarlegitimation eftersom
jag har läst en lärarutbildning på Malmös Lärarhögskola. 
Innan jag började jobba som datalärare jobbade jag som dataansvarig på
Norstedts Tryckeri. 
<p> Under mitten av 1990-talet tog jag min filosofie kandidatexamen på
systemvetenskapliga linjen Stockholms Universitet.
Jag har aldrig jobbat med programutveckling och webbutveckling i näringslivet
och ser därför emot att en vacker dag få göra det.
<p>2013 bestämde jag mig för att börja läsa på distans olika högskolekurser
samtidigt som jag jobbade som lärare (dessa
kurser har hag haft stor nytta av i min dataundervisning).
Jag har sedan dess klarat av följande distanskurser:
<ul>
<li>Introduktion till Linux och små nätverk (Debian) 
Högskolan i Gävle 7,5p</li>
<li>Scriptspråk i webbmiljö (JavaScript & PHP/MySQL) Högskolan i Gävle 7,5p</li>
<li>Andra världskriget: Historiens blodigaste krig Linnéuniversitetet 7,5p</li>
<li>Datakommunikation i nätverk I (Cisco CCNA1 & CCNA2)	Mälardalens högskola
7,5p</li>
<li>Datateknik GR (A), Java I Mittuniversitetet	7,5p</li>
<li>Datateknik A, Persondatornätverk Örebro universitet	4,5p</li>
<li>Webbutveckling med PHP	Södertörns högskola	7,5p</li>
<li>Databaser: hantera data för webben	Södertörns högskola	7,5p</li>
<li>CSS-baserad webbdesign Umeå universitet	7,5p</li>
<li>Linux Serveradministration (Ubuntu & Fedora) Umeå universitet 15p</li>
</ul>

<p>Jag bor i Stockholm sedan 1990. Jag är halv grek, min pappa kommer från 
Rhodos medan min mamma är en stockholmare. Hejar på Liverpool
och tränar styrke- och konditionsträning på fritiden. När jag får tid över 
så läser jag mycket militärhistoria.
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