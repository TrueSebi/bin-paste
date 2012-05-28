<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>/bin/paste</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="js/ajaxsubmit.js" type="text/javascript"></script>
    <!-- Le styles -->
    <link href="./css/bootstrap.css" rel="stylesheet">
    <style>
      body {
        padding-top: 60px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
    </style>
    <link href="./css/bootstrap-responsive.css" rel="stylesheet">

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="./ico/favicon.ico"> <!-- Favicon is still missing. -->
  </head>

  <body>
    <?php
    include('./config.php');
    if($settings['nobanner'] != true){
    echo '<a href="https://gibhub.com/TrueSebi/bin-paste"><img style="position: absolute; top: 40px; right: 0; border: 0;" src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>';
    }
    ?>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="?p=new">/bin/paste</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li><a href="?p=new">New Paste!</a></li>
              <li><a href="?p=help">Help</a></li>
              <li><a href="?p=about">About</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    <div class="container">
    <?php
    switch($_GET['p']){
      case 'help':
      include('./pages/help.php');
      break;
      case 'about':
      include('./pages/about.php');
      break;
      default:
      include('./pages/new.php');
      break;
    }
    ?>
     </div> <!-- /container -->
  </body>
</html>
