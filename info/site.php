
<?php
// we will be sending an HTML document
header("Content-Type: text/html");

// setup error reporting
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 'stderr');
ini_set('display_startup_errors', 'true');

// set string for the current directory
$HERE = dirname(__FILE__) . '/';

// include top
require_once $HERE . "../res/php/top.php";
?>

<div class='container'>
    <p>todo: site info</p>
</div><!-- /.container -->

<?php
require_once $HERE . "../res/php/bottom.php";
?>
