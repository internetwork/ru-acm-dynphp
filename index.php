<?php
// we will be sending an HTML document
header("Content-Type: text/html");

// setup error reporting
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 'stderr');
ini_set('display_startup_errors', 'true');

// set string for the current directory
$HERE = dirname(__FILE__) . '/';

// include "top" of page (<head>, navigation)
require_once $HERE . "/res/php/top.php";
?>
        <!-- begin main page content -->
        <div class='container'>
            <h1>Hello</h1>
            <p>Work in progress. We'll get there eventually.</p>
            <p>In the mean time, check our <a href="forum">forum</a> for news and announcements!</p>
        </div><!-- /.container -->

<?php
// include bottom of page
require_once $HERE . "/res/php/bottom.php";
?>
