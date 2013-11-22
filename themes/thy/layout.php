<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      <?php
        $title= (isset($global['title'])) ? $global['title'] : $global['site.title'];
        echo $global['site.name'] .' | '. $title;
      ?>
    </title>
    <meta name="description" content="">
    <meta name="author" content="<?php echo $global['author.name']; ?>">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/css/bootstrap-responsive.min.css" rel="stylesheet">
    <link href="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/css/main.css" rel="stylesheet">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-45962279-1', 'thyphoon.org');
      ga('send', 'pageview');
    </script>

  </head>

  <body>
    <div style="background:#0a777d; width:100%; height:5px;"></div>
    <div class="header">
      <div class="container-narrow">
        <div class="masthead text-center">
          <h1 class="muted">ThYpHoOn.org</h1>
          <ul class="nav nav-pills">
            <li class="<?php if($global["route"] == "/") echo "active";?>"><a href="/">Home</a></li>
            <li class="dropdown <?php if($global["route"] == "category") echo "active";?>">
              <a class="dropdown-toggle" id="drop5" role="button" data-toggle="dropdown" href="#">Categories <b class="caret"></b></b></a>
              <ul id="menu3" class="dropdown-menu" role="menu" aria-labelledby="drop5">
                <?php
                  foreach ($global['categories'] as $slug => $category) {
                    echo '<li><a tabindex="-1" href="/category/'.$slug.'">'. $category .'</a></li>';
                  }
                ?>
              </ul>
            </li>
            <li class="<?php if($global["route"] == "archives") echo "active";?>"><a href="/archives">Archives</a></li>
            <li class="<?php if($global["route"] == "about") echo "active";?>"><a href="/about">About</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container-narrow">
      <div class="row-fluid">
        <div class="span10 offset1">
          <?php echo $content; ?>
        </div>
      </div>
    </div>
    <hr>
    <footer id="site-footer">
        <p>Powered by <a href="http://textpress.shameerc.com" target="_blank">TextPress</a>. &copy; <a href="/imprint" target="_blank">Nik'ThYpHoOn'Grebe </a> 2013.</p>
    </footer>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $global['assets.prefix'];?>/themes/textpress/assets/js/bootstrap.min.js"></script>
  </body>
</html>