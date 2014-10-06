<?php
// always include utils file
require_once dirname(__FILE__) . "/utils.php";
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset='utf-8' />
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>

        <title>ACM @ RU</title>

        <link type='text/css' rel='stylesheet' href='https://php.radford.edu/~acm/res/css/bootstrap.min.css' />


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
