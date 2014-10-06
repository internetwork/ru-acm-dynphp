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

    <h1>About the ACM</h1>
    <p>
        ACM, the Association for Computing Machinery, is an international scientific and
        educational organization dedicated to advancing the arts, sciences, and applications
        of information technology. With a world-wide membership of 80,000, ACM functions as
        a locus for computing professionals and students working in the various fields of
        Information Technology.
    </p><p>
        ACM is the world's oldest and largest educational and scientific computing society.
        Since 1947 ACM has provided a vital forum for the exchange of information, ideas, and
        discoveries. Today, ACM serves a membership of more than 80,000 computing
        professionals in more than 100 countries in all areas of industry, academia, and
        government.
    </p><p>
        Joining the ACM as a student provides access to many benefits.  Here ares just a few:
        <ul>
            <li>Free access to software through the ACM Student Academic Initiative</li>
            <li>Access to online courses, online books, and webinars</li>
            <li>Electronic subscription to <i>Communications of the ACM</i></li>
            <li>The option to subscribe to the full ACM Digital Library</li>
            <li>It looks sharp on your resume</li>
        </ul>
        Fees vary depending on the membership level you purchase, starting at $19.  (You may
        also have access to free student memberships through participation in ICPC or
        membership in the Upsilon Pi Upsilon honor society.)
    </p><p>
        For more information, including a full list of benefits and membership options,
        check out <?php echo hyperlink('http://www.acm.org/membership/student'); ?>
    </p>

</div><!-- /.container -->

<?php
require_once $HERE . "../res/php/bottom.php";
?>
