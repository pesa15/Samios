<?php
/**
 * Config-file for Samios. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[:\.\/-_]/', '', __DIR__));
session_start();
 
/**
 * Define Samios paths.
 *
 */
define('SAMIOS_INSTALL_PATH', __DIR__ . '/..');
define('SAMIOS_THEME_PATH', SAMIOS_INSTALL_PATH . '/theme/render.php');
 
/**
 * Include bootstrapping functions.
 *
 */
include(SAMIOS_INSTALL_PATH . '/src/bootstrap.php');


/**
 * Create the Samios variable.
 *
 */
$samios = array();

/**
 * Site wide settings.
 *
 */
$samios['lang']         = 'sv';
$samios['title_append'] = ' | Samios en webbtemplate';

$samios['header'] = <<<EOD
<img class='sitelogo' src='img/samios.png' alt='Samios Logo'/>
<span class='sitetitle'>Samios webbtemplate</span>
<span class='siteslogan'>Återanvändbara moduler för webbutveckling med PHP</span>
EOD;

$samios['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Peter Samiotakis 
(peter.samiotakis@hotmail.com) |
<a href='https://github.com/pesa15/Samios'>Samios på GitHub</a> | 
<a href=
'http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>
Unicorn</a></span></footer>
EOD;

/**
 * The navbar
 *
 */
//$samios['navbar'] = null; // To skip the navbar
$samios['navbar'] = array(
  'class' => 'nb-plain',
  'items' => array(
    'hem'         => array('text'=>'Hem',         'url'=>'me.php',          
        'title' => 'Min presentation om mig själv'),
    'redovisning' => array('text'=>'Redovisning', 'url'=>'redovisning.php',
        'title' => 'Redovisningar för kursmomenten'),
    'kallkod'     => array('text'=>'Källkod',     'url'=>'source.php',  
        'title' => 'Se källkoden'),
  ),
  'callback_selected' => function($url) {
    if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      return true;
    }
  }
);

/**
 * Theme related settings.
 *
 */
//$samios['stylesheet'] = 'css/style.css';
$samios['stylesheets'] = array('css/style.css');
$samios['favicon']    = 'favicon.ico';

/**
 * Settings for JavaScript.
 *
 */
$samios['modernizr'] = 'js/modernizr.js';
$samios['jquery_src'] = '//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js';
//$samios['jquery'] = null; // To disable jQuery
$samios['javascript_include'] = array();
//$samios['javascript_include'] = array('js/main.js'); // To add extra 
//javascript files

/**
 * Google analytics.
 *
 */
$samios['google_analytics'] = 'UA-22093351-1'; // Set to null to disable google
// analytics