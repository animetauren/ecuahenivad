<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>A Responsive Layout with Bootstrap</title>
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Le styles -->
        <link href="../public/stylesheets/lavish.min.css" rel="stylesheet">
        <link href="css/theme.css" rel="stylesheet">
        <link href="../public/stylesheets/bootstrap-responsive.min.css" rel="stylesheet">
    </head>

  

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="../welcome">Ecua Henivad</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="../welcome">Home</a></li>
              <li><a href="../work">Our Work</a></li>
              <li><a href="../dir">Directions</a></li>
              <li><a href="../about_m">About</a></li>
              <li><a href="../contacts">Contact</a></li>
            </ul>

<!--             <ul class="nav pull-right">
                <li class="dropdown" id="menu1">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#menu1">
                        mconventi
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Settings</a></li>
                        <li><a href="#">Help</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Sign out</a></li>
                    </ul>
                </li>
            </ul> -->
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
  <?php echo $template['body']; ?>
  <footer>
        <p>&copy; Ecua Henivad Body Shop 2012</p>
        <p>218 Thomas St, Newark, NJ 07114</p>
        <p>phone: 973-877-0905 fax: 973-877-0906 </p>
        <p>M-F: 8:00am - 6:00pm Saturday: 8:00am - 2:00pm</p>
        <p>Designed by <a href="http://web.njit.edu/~hr28/">anmtrn</a></p>
      </footer>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script> 
    <script src="../public/javascript/jquery.min.js"></script>
    <script src="../public/javascript/dir.js"></script>
    <script src="../public/javascript/bootstrap.min.js"></script>
</html>