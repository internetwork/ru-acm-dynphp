<?php
// we will be sending an HTML document
header("Content-Type: text/html");

// setup error reporting
error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', 'stderr');
ini_set('display_startup_errors', 'true');

// set string for the current directory
$HERE = dirname(__FILE__) . '/';
// require utility functions
require_once($HERE . 'res/php/utils.php');
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>ACM @ RU</title>

        <link type='text/css' rel='stylesheet' href='res/less/theme.css' />

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
          <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
        <![endif]-->
    </head>
    <body>

        <!-- begin navigation -->
        <div class='navbar navbar-inverse navbar-static-top' role='navigation'>
          <div class='container'>
            <div class='navbar-header'>
              <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
                <span class='sr-only'>Toggle navigation</span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
                <span class='icon-bar'></span>
              </button>
              <a class='navbar-brand' href='https://php.radford.edu/~acm/'>RU ACM</a>
            </div> <!-- /.navbar-header -->
            <div class='navbar-collapse collapse'>
                <?php
                    // use utility function to create unordered list of nav items
                  echo makeNav();
                ?>
            </div><!--/.nav-collapse -->
          </div><!-- /.container -->
        </div><!-- /.navbar -->

        <!-- begin main page content -->
        <div class='container'>
            <h1>Hello</h1>
            <p>We'll get there eventually</p>
        </div><!-- /.container -->

        <!-- jQuery -->
        <script type='text/javascript' src='res/js/jquery-1.11.1.min.js'></script>
        <!-- Bootstrap plugins -->
        <script type='text/javascript' src='res/bootstrap/dist/js/bootstrap.min.js'></script>
    </body>
</html>
