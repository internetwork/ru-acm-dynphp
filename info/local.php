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

/*
 * Create HTML for officer list from contents of JSON file
 */
function makeOfficerList() {
    global $HERE;
    $jsonPath = $HERE . "../res/json/officers.json";
    return jsonFileArrayToStr($jsonPath, "makeOfficerHtml");
}

/* PHP 5.2.x doesn't have lambdas, so we have to name this. */
function makeOfficerHtml($officerObj) {
    $title = $officerObj->title;
    $name = $officerObj->name;
    $email = $officerObj->email;
    $username = getUsername($email);;
    return "<h4>$title</h4><p>$name (<a href='mailto:$email'>$username</a>)</p>\n";
}

/* helper function pulls the username portion of an email address */
function getUsername($email) {
    $atPos = strpos($email, '@');
    return substr($email, 0, $atPos);
}

/*
 * Creates HTML for a list of documents enumerated in a JSON file
 */
function makeDocumentList() {
    global $HERE;
    return "todo";
}

/*
 * Creates HTML for list of related organizations
 * using the contents of a JSON file
 */
function makeRelatedOrgList() {
    global $HERE;
    $jsonPath = $HERE . "../res/json/affiliates.json";
    return jsonFileArrayToStr($jsonPath, "makeOrgHtml");
}

/* ...if we had lambdas.  We need to petition IT to update the PHP server */
function makeOrgHtml($orgObj) {
    $name = $orgObj->name;
    $url = $orgObj->link;
    return "<p><a href='$url'>$name</a></p>\n";
}

?>

<div class='container'>
    <h1>ACM at Radford University</h1>
    <p>todo: insert marketing here</p>

    <h2>Current Officers</h2>
    <?php echo makeOfficerList(); ?>

    <h2>Documents</h2>
    <?php echo makeDocumentList(); ?>

    <h2>Related organizations</h2>
    <?php echo makeRelatedOrgList(); ?>

</div><!-- /.container -->

<?php
require_once $HERE . "../res/php/bottom.php";
?>
